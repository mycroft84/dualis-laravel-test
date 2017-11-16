$(document).ready(function () {

    /*function App()
    {
        var _self = this;

        this.init = function () {
            this.cache();
            this.addEvents();
        },
        this.cache = function () {
            this.removeItems = $('.removeItem');
        },
        this.addEvents = function () {
            this.removeItems.click(this.removeItemsClick);
        },
        this.removeItemsClick = function () {
            console.log($(this).data('id'))
        }
    }

    var app = new App();
    app.init();*/

    $('.removeItem').click(function () {
        var $this = $(this);

        $.ajax({
            url: $(this).data('url'),
            type: 'post',
            dataType: 'json',
            data: {
                param: 'param',
                _method: 'delete'
            },
            success: function (data) {
                if (data.error == false) {
                    $this.parents('tr:first').fadeOut('slow',function () {
                        $(this).remove();
                    });
                }
            }
        })
    });
});