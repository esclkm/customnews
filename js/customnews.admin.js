var num = 1;

function changecats()
{
	var newstext = '';
	var newscodes = '';
	var unsetcats = '';
	num = $('#catgenerator .newscat').length;
//	$('[name=maxpages]').val($('#catgenerator .newscat').first().find('.cacount').val());

	$('#catgenerator .newscat').each(function(i) {
		var mycat = $(this).find('.cacode').val();
		var mycat2 = mycat.replace(/[,\.\s-]/g, "_");
		$(this).find('.cag').html(('{' + 'PHP.CNS.' + mycat2 + '}').toUpperCase());
		$(this).find('.caf').html('customnews.' + mycat2 + '.tpl');

		if ($(this).length)
		{
			if (!(newscodes.indexOf(mycat +'|') + 1)  && mycat != '')
			{
				newstext += mycat;
				newscodes += mycat +'|';
				
				newstext += '|' + $(this).find('.cacount').val();
				newstext += '|' + $(this).find('.capart').val();
				newstext += '|' + $(this).find('.cawhere').val();
				newstext += '|' + $(this).find('.caorder').val();
				newstext += '|' + $(this).find('.cacat').val();
				
				if (i < num) newstext +=  '\r\n';

				$(this).find('.cat_desc').show();
				$(this).find('.cat_exists').hide();

			}
			else
			{
				$(this).find('.cat_desc').hide();
				$(this).find('.cat_exists').show();
			}
		}
	});
	$('[name=tabs]').val(newstext);
}

$(".deloption").live("click", function () {
	$(this).closest('tr').remove();
	changecats();
	return false;
});

$('#addoption').live("click", function(){
	var object = $('.newscat').last().clone();
	$(object).find('.deloption').show();
	$(object).insertBefore('#addtr').show();
	$(object).find('.cacode').val('cns'+num);
	changecats();
	return false;
});
	
$('.cam, .cac, select, .cacode, .cacount, .capart, .cacat, .cawhere, .caorder').live("change", function(){
	changecats();
});

$(document).ready(function(){
	$('#catgenerator').show().prependTo($('form#saveconfig'));
	$('[name=tabs]').closest('tr').hide();
//	$('[name=maxpages]').closest('tr').hide();
	$('[name=newsmaincat]').prepend('<option value="">'+nonecat+'</option><option value="incat">'+incat+'</option>');
	$('#catgenerator .newscat').each(function(i) {
		
		var input = $('[name=newsmaincat]').clone();
		newstext = $(this).find('.cacat').val();
		$(input).val(newstext).insertBefore($(this).find('.cacat'));
		$(this).find('.cacat').remove();
		$(input).attr('name', 'cacat').attr('class', 'cacat');
		if(i > 0) $(this).find('.deloption').show();

	});
	$('.cacat').width('200px');
	changecats();
});