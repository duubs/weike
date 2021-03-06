/**
 *
 * @param show_elem_id 分页展示元素id
 * @param callback	点击页码的js回调方法
 * @param total_items	总记录数
 * @param items_per_page 一页显示的记录数
 * @param current_page	当前页
 */
var wwwHost = "http://www.vko.cn";
function paginationBar(show_elem_id,callback,total_items,items_per_page,current_page){
    var opt = initPageBar(callback,total_items,items_per_page,current_page - 1);
    $("#" + show_elem_id).pagination(total_items, opt);
}

function isEmpty(str){
    if(!str){
        return true;
    }
    return false;
}

function initPageBar(callback,total_items,items_per_page,current_page){
    var opt = {};
//	opt.prev_text = '上一页';
//	opt.next_text = '下一页';
//	opt.num_display_entries = 9;
    if (!isEmpty(items_per_page)) {
        opt.items_per_page = items_per_page;
    }
    if (!isEmpty(current_page)) {
        opt.current_page = current_page;
    }
    opt.callback = callback;
    return opt;
}