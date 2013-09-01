Datamanage.factory('typesService', ['typesResource', function(typesResource) {
    var allow_types = [];

    this.getData = function getData(callback) {
        typesResource.get(
            {},{},
            function(respond) {
                allow_types = respond;

                if (typeof callback == 'function') {
                    callback()
                }
            }
        );
    }

    this.getList = function getList(type, filter, callback) {
        if (allow_types.length == 0) {
            this.getData(function() {
                if (typeof allow_types[type] != 'undefined') {
                    if (filter) {
                        var result = []

                        for (var i = 0; i < allow_types[type].length; i++) {
                            if (allow_types[type][i].type == filter) {
                                result.push(allow_types[type][i]);
                            }
                        };

                        if (typeof callback == 'function') callback(result);

                        return result;
                    } else {
                        if (typeof callback == 'function') callback(allow_types[type]);

                        return allow_types[type];
                    }
                } else {
                    console.error('Тип "' + type + '" не найден')
                }
            });
        } else {
            if (typeof allow_types[type] != 'undefined') {
                if (filter) {
                    var result = []

                    for (var i = 0; i < allow_types[type].length; i++) {
                        if (allow_types[type][i].type == filter) {
                            result.push(allow_types[type][i]);
                        }
                    };

                    if (typeof callback == 'function') callback(result);

                        return result;
                    } else {
                        if (typeof callback == 'function') callback(allow_types[type]);

                        return allow_types[type];
                    }
            } else {
                console.error('Тип "' + type + '" не найден')
            }
        }

        return;
    }

    this.getIndexList = function getIndexList(type, filter, callback) {
        var result = {}
          , key;

        if (allow_types.length == 0) {
            this.getData(function() {
                if (typeof allow_types[type] != 'undefined') {
                    if (filter) {
                        for (var i = 0; i < allow_types[type].length; i++) {
                            if (allow_types[type][i].type == filter) {
                                key         = allow_types[type][i].code;
                                result[key] = allow_types[type][i];
                            }
                        };
                    } else {
                        for (var i = 0; i < allow_types[type].length; i++) {
                            key         = allow_types[type][i].code;
                            result[key] = allow_types[type][i];
                        };
                    }

                    if (typeof callback == 'function') callback(result);

                    return result;
                } else {
                    console.error('Тип "' + type + '" не найден')

                    return [];
                }
            });
        } else {
            if (typeof allow_types[type] != 'undefined') {
                if (filter) {
                    for (var i = 0; i < allow_types[type].length; i++) {
                        if (allow_types[type][i].type == filter) {
                            key         = allow_types[type][i].code;
                            result[key] = allow_types[type][i];
                        }
                    }
                } else {
                    for (var i = 0; i < allow_types[type].length; i++) {
                        key         = allow_types[type][i].code;
                        result[key] = allow_types[type][i];
                    }
                }

                if (typeof callback == 'function') callback(result);

                return result;
            } else {
                console.error('Тип "' + type + '" не найден')

                return [];
            }
        }

        return;
    }

    return this;
}]);
