$(document).ready(function()
{
	console.log( "ready!" );
	refresh_files();

	$('.delete_file_link').live('click', function(e) {
	e.preventDefault();
	if (confirm('Are you sure you want to delete this file?'))
	{
		var link = $(this);
		$.ajax({
			url			: './upload/delete_file/' + link.data('file_id'),
			dataType	: 'json',
			success		: function (data)
			{
				files = $(#files);
				if (data.status === "success")
				{
					link.parents('li').fadeOut('fast', function() {
						$(this).remove();
						if (files.find('li').length == 0)
						{
							files.html('<p>No Files Uploaded</p>');
						}
					});
				}
				else
				{
					alert(data.msg);
				}
			}
		});
	}
});
});
$(function() {
	$('#upload_file').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:'./uploadController/upload_file/', 
			secureuri		:false,
			fileElementId	:'userfile',
			dataType		: 'json',
			data			: {
				'title'				: $('#title').val()
			},
			success	: function (data, status)
			{
				if(data.status != 'error')
				{
					$('#files').html('<p>Reloading files...</p>');
					refresh_files();
					$('#title').val('');
				}
				alert(data.msg);
			}
		});
		return false;
	});
});
function refresh_files()
{
	$.get('./uploadController/files/')
	.success(function (data){
		$('#files').html(data);
	});
}