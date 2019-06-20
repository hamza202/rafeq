var DatatablesBasicHeaders = {
    init: function () {
        $("#m_table_1").DataTable();
    }
};
var DatatablesBasicHeaders2 = {
    init: function () {
        $("#m_table_2").DataTable();
    }
};
var DatatablesBasicHeaders3 = {
    init: function () {
        $("#m_table_3").DataTable();
    }
};
jQuery(document).ready(function () {
    DatatablesBasicHeaders.init();
    DatatablesBasicHeaders2.init();
    DatatablesBasicHeaders3.init();
});
