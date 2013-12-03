var vdir = "";

function load_video(id) {
	$.getScript(vdir + "/videos_json/" + id + "?method=callback_load_video");
	return false;
}

function callback_load_video(data) {
    $(".video_showcased_embed").html(data.embed);
	$(".video_showcased_title").html(data.name);
	$(".video_showcased_description").html(data.description);
}

$(document).ready(function()
{
	$(".defaultText").focus(function(srcc)
	{
		if ($(this).val() == $(this)[0].title)
		{
			$(this).removeClass("defaultTextActive");
			$(this).val("");
		}
	});
	
	$(".defaultText").blur(function()
	{
		if ($(this).val() == "")
		{
			$(this).addClass("defaultTextActive");
			$(this).val($(this)[0].title);
		}
	});
	
	$(".defaultText").blur();        
});