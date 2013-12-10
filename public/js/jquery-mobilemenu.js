/*
* MobileMenu - jQuery Plugin
* Builds a select dropdown navigation for mobile layouts based on an existing unordered list menu
*
* Created 2012 by Luke Ballantine
*
* Blog post at: http://mkr.st/ojja
* 
* Version: 1.0.0 (15/05/2012)
* Requires: jQuery v1.6+
*/

(function ($) {
    $.fn.mobileMenu = function (o) {

        var o = jQuery.extend({ ulsource: '', maxlevel: 3 }, o);

        // internal functions
        String.prototype.lpad = function (padString, length) {
            var str = this;
            while (str.length < length)
                str = padString + str;
            return str;
        }

        var MENU = MENU || {
            optionsList: "",

            // recursively walks an unordered list and builds a list of option elements for a select dropdown
            BuildSelectOptionsFromMenu: function (liElems, level, maxLevel) {

                if (liElems.length == 0)
                    return;

                var spaces = "".lpad("&nbsp;", (level - 1) * 12);

                liElems.each(function () {

                    var aElem = $(this).find("a").first();
                    if (MENU.optionsList.indexOf("'" + aElem.attr("href") + "'") == -1)
                        MENU.optionsList += "<option value='" + aElem.attr("href") + "'>" + spaces + aElem.text() + "</option> \n";

                    // recursively get next level of li tags
                    if (level < maxLevel)
                        MENU.BuildSelectOptionsFromMenu($(this).children("ul").children("li"), level + 1, maxLevel);
                });
            }
        }

        // plugin code
        var ul = $(o.ulsource);
        var lis = ul.children("li");

        if (this.length == 0 || !this.is("select")) {
            $.error("mobileMenu method not applied to a select element on jquery.mobilemenu");
            return this;
        }

        if (ul.length == 0 || lis.length == 0) {
            $.error("ulsource not found in DOM, or doesn't contain li elements on jquery.mobilemenu");
            return this;
        }

        MENU.BuildSelectOptionsFromMenu(lis, 1, o.maxlevel);

        // add newly constructed list of options to the select element and navigate on the change event
        this.html(MENU.optionsList).bind("change.mobileMenu", function () {
            window.location.href = $(this).val();
        });

        return this;

    };
})(jQuery);
