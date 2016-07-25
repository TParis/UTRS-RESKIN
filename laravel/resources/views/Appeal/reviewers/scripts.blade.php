<script language="javascript" type="text/javascript">

$(document).ready(function() {
	$("#submit-comment").click(function(event) {
	
		event.preventDefault();
	
		commentLength = $("#comments-form textarea").val().length;
	
		if (commentLength > 0 && commentLength < 10000) {
			$.ajax({
				method: "POST",
				url: "/appeal/{{ $appeal->id }}/addComment",
				data: $("#comments-form").serialize(),
				success: function(data) {
				
						panelDiv = $("<div>").addClass("panel").addClass("panel-default");
						panelHeadingDiv = $("<div>").addClass("panel-heading");
						panelTitle = $("<h3>").addClass("panel-title").html("<a href=\"/users/" + data.user_id + "\">" + data.user.name + "</a> @ " + data.updated_at).appendTo(panelHeadingDiv);
						panelHeadingDiv.appendTo(panelDiv);
						panelBodyDiv = $("<div>").addClass("panel-body").text(data.comment).appendTo(panelDiv);
						panelDiv.appendTo("#comments");
						
						$("#comments-form textarea").val("");
				},
				error: function(data) {
					alert("Error: " + data);
				},
			});
		}
	});
	$(".status-change").click(function(event) {
	
		event.preventDefault();
	
		$.ajax({
			method: 'PUT',
			url: '/appeal/{{ $appeal->id }}/statusChange',
			data: {'status': $(this).data('status'), '_token': '{{ csrf_token() }}'},
			success: function(data) {
				$(".appeal-status").text(data.status);
			},
			error: function(data) {
				alert("Error: " + data);
			},
		});
		
	});
});




</script>