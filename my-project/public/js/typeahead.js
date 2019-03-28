$(document).ready(function($) {
    var engine = new Bloodhound({
        remote: {
            url: '/search/name?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    // var engine2 = new Bloodhound({
    //     remote: {
    //         url: '/search/email?value=%QUERY%',
    //         wildcard: '%QUERY%'
    //     },
    //     datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
    //     queryTokenizer: Bloodhound.tokenizers.whitespace
    // });

    $(".search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, [
        {
            source: engine1.ttAdapter(),
            name: 'students-name',
            display: function(data) {
                return data.name;
            },
            templates: {
                empty: [
                    '<div class="header-title">Name</div><div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                ],
                header: [
                    '<div class="header-title">Name</div><div class="list-group search-results-dropdown"></div>'
                ],
                suggestion: function (data) {
                    return '<a href="/cars/' + data.id + '" class="list-group-item">' + data.name + '</a>';
                }
            }
        }, 
    ]);
});