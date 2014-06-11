/**
 * @file bootstrap-tab-ext.js 
 *
 */
(function($, undefined){
  // DOM Ready
  $(function(){


    if(typeof $.fn.tab !== 'undefined'){
      $.fn.tab.Constructor.prototype.keydown = function (e) {
        var $this = $(this)
        , $items
        , $ul = $this.closest('ul[role=tablist] ')
        , index
        , k = e.which || e.keyCode

        $this = $(this)
        if (!/(37|38|39|40)/.test(k)) return

        $items = $ul.find('[role=tab]:visible')
        index = $items.index($items.filter(':focus'))

        if (k == 38 || k == 37) index--                         // up & left
        if (k == 39 || k == 40) index++                        // down & right


        if(index < 0) index = $items.length -1
        if(index == $items.length) index = 0

        var nextTab = $items.eq(index)
        if(nextTab.attr('role') ==='tab'){

          nextTab.tab('show')      //Comment this line for dynamically loaded tabPabels, to save Ajax requests on arrow key navigation
          .focus()
        }
        // nextTab.focus()

        e.preventDefault()
        e.stopPropagation()
      }

      $(document).on('keydown.tab.data-api','[data-toggle="tab"], [data-toggle="pill"]' , $.fn.tab.Constructor.prototype.keydown)

     var tabactivate =    $.fn.tab.Constructor.prototype.activate;
     $.fn.tab.Constructor.prototype.activate = function (element, container, callback) {
        var $active = container.find('> .active')
        $active.find('[data-toggle=tab], [data-toggle=pill]').attr({ 'tabIndex' : '-1','aria-selected' : false })
        $active.filter('.tab-pane').attr({ 'aria-hidden' : true,'tabIndex' : '-1' })

        tabactivate.apply(this, arguments)

        element.addClass('active')
        element.find('[data-toggle=tab], [data-toggle=pill]').attr({ 'tabIndex' : '0','aria-selected' : true })
        element.filter('.tab-pane').attr({ 'aria-hidden' : false,'tabIndex' : '0' })
     }
    }
  });
})(jQuery);
