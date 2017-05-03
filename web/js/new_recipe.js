
$(function()
{ 
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.box:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
		
        newEntry.find('input').val('');
        newEntry.find('input[id=ingredients]').attr('name','ingredient'+document.getElementById('count-hidden').getAttribute('value'));
		
		newEntry.find('input').val('');
        newEntry.find('input[id=quantities]').attr('name','quantity'+document.getElementById('count-hidden').getAttribute('value'));
		
        controlForm.find('.entry:not(:last) .btn-add')
			.removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
			
		var count = document.getElementById('count-hidden').getAttribute('value');
		var somma = parseInt(count) + 1;
		
		document.getElementById('count-hidden').setAttribute('value',somma);
		 
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();
		e.preventDefault();		
		return false;
	});
});