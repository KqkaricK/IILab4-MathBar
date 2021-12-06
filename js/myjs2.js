$(document).ready(function() {
	var dishesjpg = ["1.jpg","2.jpg","3.jpg","4.jpg"];
	var dishesName = ["Яичница, грибной жюльен, чай с мёдом", "Красное мясо, устрицы","Хлеб с водой","Печеньки-цифры"];
	var dishes = $('.dishes');
	$.each(dishesjpg,function(index, el) {
		dishes.append('<div class="col-sm-6 dish"><img src = "img/'+el+'" width="327" height="217"><p>'+dishesName[index]+'</p></div>');
	});
});