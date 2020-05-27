/*
* Habbo.js
*
*/

/* Register module */
var regManager = (function () {

    function defaultRegister(){
        var bday = $('#bday_year').val() + '-' + $('#bday_month').val() + '-' + $('#bday_day').val();
        if(bday != '--'){
            $('#id_birthday').val(bday);
        }else{
            $('#id_birthday').val('');
        }

        var loginData = $('#register_form').serialize();

        var splitLocation = document.location.href.toString().split('/');

        if (splitLocation.length >= 4) {
            var invitedBy = splitLocation[3];
            loginData += '&invited_by=' + invitedBy;
        }

        // Clean up potential old errors
        $(".form_error").remove();

        $.ajax({
            type: "POST",
            url: '/ajax/register',
            data: loginData,
            success: function(data, textStatus, req) {
                if(data['status'] == 'OK'){
                    _gaq.push(['_trackEvent', 'Register default', 'Success']);
                    window.location.href = '/avatar';
                }else{
                    if(data['data'] == 'E_UNDERAGE'){
                        _gaq.push(['_trackEvent', 'Register default', 'Under-age']);
                        $('#underage-dialog').dialog('open');
                    }else{
                        _gaq.push(['_trackEvent', 'Register default', 'Error']);
                        showErrors(data['errors']);
                    }
                }

            },
            error: function(xhr) {
                //something went wrong
                showErrors();
                _gaq.push(['_trackEvent', 'Register default', 'Error']);
            }
        });
    }

    function facebookRegister(){
        $.ajax({
            type: "GET",
            url: '/ajax/facebook_login',
            success: function(data, textStatus, req) {
                if(data['status'] == 'OK'){
                    _gaq.push(['_trackEvent', 'Register Facebook', 'Success']);
                    window.location.href = '/avatar';
                }else if(data['status'] == 'REDIRECT'){
                    window.location.href = data['data'];
                }else{
                    if(data['data'] == 'E_UNDERAGE'){
                        _gaq.push(['_trackEvent', 'Register Facebook', 'Under-age']);
                        $('#underage-dialog').dialog('open');
                    }else{
                        //show error message
                        showErrors(data['errors'], 'fb-errors');
                        _gaq.push(['_trackEvent', 'Register Facebook', 'Error']);
                    }
                }
            },
            error: function(xhr) {
                //something went wrong
                showErrors(null,'fb-errors');
                _gaq.push(['_trackEvent', 'Register Facebook', 'Error']);
            }
        });
    }

    function showErrors(errorMessages, errorElement){
        $('.input_error').removeClass('input_error');
        $('.errors').html('');
        if(errorMessages){
            for (key in errorMessages) {
                if(errorElement){
                    $('#' + errorElement).html('<p>' +errorMessages[key] + '</p>');
                }else{
                    var errorHTML = '<div class="error-container"><table class="error-table"><tr><td>' + errorMessages[key] + '</td></tr></table></div>';
                    $('#error_' + key).html(errorHTML);
                    if(key != 'agree'){
                        $('#error_' + [key]).closest('.input-area').find('input').addClass('input-error');
                    }else{
                        $('#error_' + [key]).closest('.input-area').find('input').closest('.checkbox').addClass('input-error');
                    }
                }
            }
        }else{
            if(errorElement){
                $("#" + errorElement).html('<p>' + defaultError + '</p>');
            }else{
                $("#errors").html('<p>' + defaultError+ '</p>');
            }
        }

    }

    return {
        register: function(regType){
            if(regType == 'facebook'){
                facebookRegister();
            }else{
                defaultRegister();
            }
        },
        errors: showErrors
    };
})();

/* Avatar editor */
var avatarManager = (function (){

    var editorContentClass = 'editor-content-area';
    var editorNaviClass = 'editor-navi-item';
    var editorSubNaviClass = 'editor-group-navi-item';
    var editorSubContentClass = 'editor-sub-content-area';

    var FULL_ASSET_COUNT = 30;
    var ROW_LENGTH = 6;

    var state = {
        'direction': 4,
        'currentAsset': null,
        'postureString': 'd-' + 4 + '.h-' + 4,
        'assets': {
            
        },
        'palettes': {
            
        },
        'paletteDataForSet': {
            
        },
        'currentColours': {
            
        }
    }
    
    /*
     * Initialize with optional kwargs dict
     */
    function init(kwargs){
        if (kwargs) {
            for (kw in kwargs) {
                state[kw] = kwargs[kw];
            }
        }

        var initialType = 'hd';

        $('#' +  initialType + '-navi').addClass('active');
        
        getData(initialType);
        
        $('#' +  initialType + '-content').addClass('active');
    }
    

    function _renderAssetsTo(setType, data) {
        state['currentAsset'] = setType;
        
        $assetContainerId = $('#' + setType + '-container .asset-container');
        $assetContainerId.html('');
        
        for (var i=0; i<data.length; i++) {
            var assetHtml = '<div class="asset">';
                assetHtml += '<a id="asset-' + data[i]['id'] + '" class="handle-asset '+setType+'-asset" set_type="'+setType+'">';
                    assetHtml += '<table class="asset-item-table"><tr><td>';
                        assetHtml += '<span><img class="asset-img" src="' + ASSET_URL + '/' + setType +'_' + data[i]['id'] +'.png" alt=""/></span>';
                        if(data[i]['club_level'] > 0){ 
                            assetHtml += '<div class="vip-asset"></div>';
                        }
                    assetHtml += '</td></tr></table>';
                assetHtml += '</a>';
            assetHtml += '</div>';
            
            $assetContainerId.append(assetHtml);
        }

        if(data.length < FULL_ASSET_COUNT){
            var additionalAssets = FULL_ASSET_COUNT - data.length;
            for(var x=0; x<additionalAssets;x++){
                var assetHtml = '<div class="asset empty-asset">';
                    assetHtml += '<a class="fake-asset">';
                        assetHtml += '<table class="asset-item-table"><tr><td>&nbsp;</td></tr></table>';
                    assetHtml += '</a>';
                assetHtml += '</div>';
                $assetContainerId.append(assetHtml);
            }
        } else {
            var additionalAssets = ROW_LENGTH - (data.length % ROW_LENGTH);
            if (additionalAssets != 0 && additionalAssets != ROW_LENGTH) {
                for(var x=0; x<additionalAssets;x++){
                    var assetHtml = '<div class="asset empty-asset">';
                        assetHtml += '<a class="fake-asset">';
                            assetHtml += '<table class="asset-item-table"><tr><td>&nbsp;</td></tr></table>';
                        assetHtml += '</a>';
                    assetHtml += '</div>';
                    $assetContainerId.append(assetHtml);
                }
            }
        }

        if (state[setType]) {
            var setId = state[setType].split('-')[0];

            var splitSet = state[setType].split('-');

            // Need to set color state before handling asset
            for (var i=1; i<splitSet.length; i++) {
                var paletteIdx = i - 1;
                var color = splitSet[i];
                setColour(setType, paletteIdx, color);
            }

            state[state['currentAsset']] = getColouredSetId(state['currentAsset']);
            setAsset(state['currentAsset'], state[state['currentAsset']]);
            activateAsset(state['currentAsset'], setId);
            _handlePalettes(state['currentAsset'], setId);
        }else{
            //no asset, hide palette
            $('.palette-header').removeClass('active');
            
            var $contentArea = $('#' + setType + '-container').closest('.editor-content-area');
            var $paletteContainerId = $contentArea.find('.palette-container');
            $paletteContainerId.html('');
        }
    }

    function _renderPaletteTo(setType, paletteId, colours, $paletteContainerId, paletteClass) {
        $paletteContainerId.append('<div id="' + setType + '-palette_' + paletteId + '" class="palette ' + paletteClass + ' palette-' + paletteId + '"></div>');
        var $palette = $('#' + setType + '-palette_' + paletteId);
        
        for (var i=0; i<colours.length; i++) {
            var colourId = colours[i]['id'];
            var colourCode = colours[i]['colour'];
            $palette.append('<div class="color"><a id="color-' + setType + '_' + paletteId+'_'+colourId+'" class="handle-colour '+ colourCode +'"><span style="background-color: #'+ colourCode +'"></span></a></div>');
        }
    }

    function colourActive(setType, colourIds) {
        if (colourIds.length != 2) throw Error('Colours have bad length ' + colourIds.length);
        if (state['currentColours'][setType]) {
            return state['currentColours'][setType][0] == colourIds[0] && state['currentColours'][setType][0] == colourIds[1];
        }
        return false;
    }

    function handleColour(that) {
        var parentPalette = $(that).closest('.palette');
        var parentPaletteId = $(parentPalette).attr('id');
        var paletteIdx = parentPaletteId.split('-')[2];

        var $a = $(that);
        var id = $a.attr('id');
        var idParts = id.split('_');

        var paletteId = idParts[1];
        var colourId = idParts[2];
        
        _gaq.push(['_trackEvent', 'Avatar', 'Change color']);

        var setType = avatarManager.getCurrentAsset();

        setColour(setType, paletteIdx, colourId);
        var colouredSetId = getColouredSetId(setType);
        setAsset(setType, colouredSetId);
        
        var doScroll = false;
        
        activateColor(setType, paletteId, paletteIdx, doScroll);
    }

    function getColouredSetId(setType) {
        var colourIds = state['currentColours'][setType];
        if (!colourIds) colourIds = [null, null];

        var colouredSetId = state[setType];
        if (!colouredSetId) return null;

        var setId = colouredSetId.split('-')[0];

        for (var i=0; i<colourIds.length; i++) {
            if (!colourIds[i]) break;

            setId += '-' + colourIds[i];
        }

        return setId;
    }


    function setColour(setType, paletteIdx, colourId) {
        var colourIds = state['currentColours'][setType];
        if (!colourIds) colourIds = [null, null];
        colourIds[paletteIdx] = colourId;
        if (colourActive(setType, colourIds)) return;

        state['currentColours'][setType] = colourIds;
    }

    function unsetColour(setType, paletteIdx) {
        var colourIds = state['currentColours'][setType];
        colourIds[paletteIdx] = null;
    }

    function activateColor(setType, paletteId, paletteIdx, doScroll){
        //deactive  previous color
        var parentElement = '#' + setType + '-palette_' + paletteId;
        $(parentElement + ' .handle-colour').removeClass('active');
        
        //activate color
        var colorElement = "#color-" + setType + '_' + paletteId + '_' + state['currentColours'][setType][paletteIdx];
        $(colorElement).addClass('active');
        
        if(doScroll) $(parentElement).scrollTo($(colorElement));
    }

    /*
     * Assume the assets always have only one paletteId
     */
    function _handlePalettes(setType, setId) {
        var paletteData = state['paletteDataForSet'][setId];
        var paletteId = paletteData['palette_id'];
        var paletteCount = paletteData['palette_count'];
        var palette = state['palettes'][paletteId];

        var $contentArea = $('#' + setType + '-container').closest('.editor-content-area');
        var $paletteContainerId = $contentArea.find('.palette-container');
        $paletteContainerId.html('');

        if (paletteCount == 0) {
            var paletteClass = '';
            $('.palette-header').removeClass('active');
        } else {
            $('.palette-header').addClass('active');
            if (paletteCount == 1) {
                var paletteClass = 'size-default';
            }
            else if (paletteCount == 2){
                var paletteClass = 'size-small'; 
            } else {
                //throw Error('Never more than two palettes');
                // Should not be hit. Even asset 3048 has one filter out with colour_index 0
                paletteCount = 2;
                var paletteClass = 'size-small'
            }
        }
        // Set our palettes straight
        for (var i=0; i<paletteCount; i++) {
            var htmlId = paletteId.toString() + '-' + i.toString();
            _renderPaletteTo(setType, htmlId, state['palettes'][paletteId], $paletteContainerId, paletteClass);

            // Deal with default if asset did not exist, no color got set
           if (state['currentColours'][setType] == null || state['currentColours'][setType][i] == null) {
                if (paletteCount) {
                    // Have only one palette by design, set the first color twice
                    var colourId = state['palettes'][paletteId][0]['id'];
                    // i for paletteIdx
                    setColour(setType, i, colourId);
                }
            }
            
            var doScroll = true;
            
            activateColor(setType, htmlId, i, doScroll);
        }

        // Clear out residue
        var colourIds = state['currentColours'][setType];
        if(colourIds){
            for (var i=paletteCount; i<colourIds.length; i++) {
                unsetColour(setType, i);
            }
        }

    }
    
    

    function _getData_success(setType) {
        return function(retData, textStatus, xhr) {
            if (retData['status'] == 'OK') {
                if (!state['assets'][setType]) {
                    state['assets'][setType] = {}
                }

                var paletteId = retData['data']['palette_id'];
                state['assets'][setType][state['gender']] = retData['data']['assets'];
                state['assets'][setType]['paletteId'] = paletteId;
                

                // Remember our colurs
                state['palettes'][paletteId] = retData['data']['palette'];

                var paletteData = retData['data']['set_id_palette_data'];
                for (var setId in paletteData) {
                    state['paletteDataForSet'][setId] = paletteData[setId];
                }

                _renderAssetsTo(setType, retData['data']['assets']);
            }
        }
    }

    function getData(setType){
        //if asset type is head, we are changing gender
        //and asset type is the same
        if(setType != 'hd'){
            // Bail out if we re-select current one
            // Not doing so would remove our current setting and hit the API
            if (setType == state['currentAsset']) return;
        }
        
        var dataLoaded = state['assets'][setType] && state['assets'][setType][state['gender']];

        if(!dataLoaded){
            var data = {
                'set_type': setType,
                'gender': state['gender']
            }
            $.ajax({
                url: ASSETS_URL,
                data: data,
                type: 'get',
                success: _getData_success(setType)
            });
        } else {
            _renderAssetsTo(setType, state['assets'][setType][state['gender']]);
        }
    }
    
    function changeTab(link){
        //main navi active
        $('.' + editorNaviClass).removeClass('active');
        $(link).addClass('active');
        
        var linkId = $(link).attr('id');
        var setType = linkId.replace('-navi','');
        
        _gaq.push(['_trackEvent', 'Avatar', 'Main Tab']);
        
        //sub navi active
        $('.' + editorSubNaviClass).removeClass('active');
        $('#' + setType + '-subnavi.' + editorSubNaviClass).addClass('active');
        
        //sub page content
        $('.' + editorSubContentClass).removeClass('active');
        $('#' + setType + '-container').addClass('active');

        getData(setType);
        
        //main content active
        $('.' + editorContentClass + '.active').removeClass('active');
        $('#' + setType + '-content').addClass('active');
    }
    
    function changeSubTab(link){
        //main navi active        
        var linkId = $(link).attr('id');
        var setType = linkId.replace('-subnavi','');
        
        _gaq.push(['_trackEvent', 'Avatar', 'Sub Tab']);

        getData(setType);

        //sub navi active
        $('.' + editorSubNaviClass).removeClass('active');
        $('#' + setType + '-subnavi.' + editorSubNaviClass).addClass('active');
        
        //sub page content
        $('.' + editorSubContentClass).removeClass('active');
        $('#' + setType + '-container').addClass('active');
    }

    /*
     * Direction is +1 or -1
     */
    function rotateFigure(directionChange) {
        var minDirection = 0;
        var maxDirection = 7;
    
        state['direction'] += directionChange;

        if (state['direction'] > maxDirection) state['direction'] = minDirection;
        else if (state['direction'] < minDirection) state['direction'] = maxDirection;
        
        _gaq.push(['_trackEvent', 'Avatar', 'Rotate']);

        var $url = $("#avatar-image > img");
        var url = $url.attr('src');
        var urlParts = url.split(',');

        // direction part
        state['postureString'] = 'd-' + state['direction'] + '.h-' + state['direction'];
        urlParts[1] = state['postureString'];

        url = urlParts.join(',');

        $url.attr('src', url);
    }

    function _updateFigure(data, success) {
        $.ajax({
            url: UPDATE_FIGURE_URL,
            data: data,
            type: "post",
            success: success
        });
    }

    function setGender(gender) {
        if (gender == state['gender']) return;

        var data = {
            'gender': gender,
            'posture': state['postureString']
        }

        var success = function(retData, textStatus, xhr) {
            if (retData['status'] == 'OK') {
                $("#avatar-image > img").attr('src', retData['data']);
                state['gender'] = gender;
                getData('hd');
                
                //update clothing state
                var retState = retData['state'];
                for(key in retState){
                    state[key] = retState[key];
                }
            }
        }

        _updateFigure(data, success);
    }

    function setAsset(setType, colouredSetId) {
        if (state[setType] && state[setType] == colouredSetId) return;

        state['currentAsset'] = setType;

        var data = {
            'set_type': setType,
            'set_id': colouredSetId,
            'posture': state['postureString']
        }

        var success = function(retData, textStatus, xhr) {
            if (retData['status'] == 'OK') {
                $("#avatar-image > img").attr('src', retData['data']);
                state[setType] = colouredSetId;
            }
        }

        _updateFigure(data, success);
    }

    function delAsset(setType) {
        if (!state[setType]) return;
        if (REQUIRED_PARTS.indexOf(setType) > -1) return;

        var data = {
            'set_type': setType,
            'set_id': '',
            'posture': state['postureString']
        }

        var success = function(retData, textStatus, xhr) {
            if (retData['status'] == 'OK') {
                $("#avatar-image > img").attr('src', retData['data']);
                delete state[setType];
            }
        }

        _updateFigure(data, success);
    }

    function activateAsset(setType, setId) {
        $('#' + setType + '-container .asset a').removeClass('active');
        $('#asset-' + setId).addClass('active');

    }

    function deactivateAsset(setType, setId) {
        if (REQUIRED_PARTS.indexOf(setType) > -1) return;
        $('#' + setType + '-container .asset a').removeClass('active');
        $('#asset-' + setId).removeClass('active');

    }

    function handleAsset(that) {
        var $a = $(that);
        var setType = $a.attr('set_type');
        var setId = $a.attr('id').split('-')[1];
        
        _gaq.push(['_trackEvent', 'Avatar', 'Asset']);
    
        // Figure out if it's coloured, strip colors if so
        if (setId.indexOf('-') > -1) {
            var parts = setId.split('-');
            setId = parts[0];
        }

        _handlePalettes(setType, setId);

        activateAsset(setType, setId);

        var colourIds = state['currentColours'][setType];
        var colouredSetId = setId;
        if (!colourActive(setType, [null, null])) {
            colouredSetId += '-' + colourIds[0];
            if (colourIds[1]) {
                colouredSetId += '-' + colourIds[1];
            }
        }

        if (state[setType] && state[setType] == colouredSetId) {
            delAsset(setType);
            deactivateAsset(setType, setId);
        } else {
            setAsset(setType, colouredSetId);
            activateAsset(setType, setId);
        }
    }

    return {
        init: init,
        tab: changeTab,
        subTab: changeSubTab,
        rotateFigure: rotateFigure,
        setGender: setGender,
        setAsset: setAsset,
        delAsset: delAsset,
        handleAsset: handleAsset,
        handleColour: handleColour,
        setColour: setColour,
        getCurrentAsset: function() {
            return state['currentAsset'];
        },
        lol: state
    };
})();

/* Invitation manager */
var inivitationManager = (function (){
    
    function sendInvitations(){
        var inputs = $('#invitation_form input.email_invitation');
        for(var i=0;i<inputs.length;i++){
            var value = $(inputs[i]).val();
            if(value == emailInitialTxt){
                $(inputs[i]).val('');
            }
        }
        
        var formData = $('#invitation_form').serialize();

        // Clean up potential old errors
        $(".form_error").remove();

        $.ajax({
            type: "POST",
            url: '/ajax/invitations',
            data: formData,
            success: function(data, textStatus, req) {
                if(data['status'] == 'OK'){
                    _gaq.push(['_trackEvent', 'Invitations', 'Invitations default', 'Success']);
                    $('#invitation-dialog').dialog('open');
                }else{
                    _gaq.push(['_trackEvent', 'Invitations', 'Invitations default', 'Error']);
                   showErrors(data['errors']);
                }

            },
            error: function(xhr) {
                //something went wrong
                showErrors();
                _gaq.push(['_trackEvent', 'Invitations', 'Invitations default', 'Error']);
            }
        });
    }
    
    function showErrors(errorMessages){
        $('.input_error').removeClass('input_error');
        $('.errors').html('');
        if(errorMessages){
            for (key in errorMessages) {
                var error = errorMessages[key];
                if(error.email){
                    var errorHTML = '<div class="error-container"><table class="error-table"><tr><td>' + error.email + '</td></tr></table></div>';
                    $('#error_id_form-' + key + '-email').html(errorHTML);
                    $('#error_id_form-' + key + '-email').closest('.input-area').find('input').addClass('input-error');
                }
            }
        }else{
            $("#errors").html('<p>' + defaultError + '</p>');
        }
    }
    
    function invitationsSent(){
        $('invitation-dialog').dialog('close');
        location.href="/invitations";
    }
    
    return {
        sent: invitationsSent,
        send: sendInvitations
    };
    
})();

