Datamanage.factory('messageService', ['$rootScope', function($rootScope) {
    $rootScope.message = {
        local : false,
        global: false
    };

    $rootScope.resetLocalMessage = function resetLocalMessage(textItem) {
        if ( typeof textItem != 'undefined' && typeof $rootScope.message.local.text != 'undefined' && typeof $rootScope.message.local.text[textItem] != 'undefined') {
            delete($rootScope.message.local.text[textItem]);
        } else {
            $rootScope.message.local = false;
        }
    }

    $rootScope.resetGlobalMessage = function resetGlobalMessage() {
        $rootScope.message.global = false;
    }

    this.setMessage = function setMessage(message) {
        var validMessage = null;

        if (typeof message.type != 'undefined') {
            validMessage = {
                status : message.status || 'warning',
                text   : message.text || false
            }

            if (message.type == 'local') {
                $rootScope.message.local = validMessage;
            } else if (message.type == 'global') {
                $rootScope.message.global = validMessage;
            }
        }
    }

    return this;
}]);
