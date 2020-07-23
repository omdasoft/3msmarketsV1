
$(document).ready(function(){
    
   /*=======================================
			datatable js 
		=========================================*/
	
		$('#example').DataTable({
			"language": {
				"search":         "بحث:",
				"zeroRecords":    "لا توجد نتائج للبحث",
				"emptyTable":     "لا توجد بيانات في هذا الجدول",
				"lengthMenu":     "عرض _MENU_ سجل",
				"info":           "عرض السجلات من _START_ ل  _END_ من مجموع السجلات _TOTAL_",
				"infoFiltered":   "(العدد الكلي للسجلات  _MAX_ )",
				"infoEmpty":      "لا توجد سجلات مطابقة للبحث",
				"paginate": {
					"first":      "الاول",
					"last":       "الاخير",
					"next":       "التالي",
					"previous":   "السابق"
				},
			}
	});
	

});

