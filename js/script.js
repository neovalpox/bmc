$(document).ready(function(){
	
	function affiche_dialog(){
		
		var elem = $(this).closest('.item');
		
		$.confirm({
			'title'		: 'Delete Confirmation',
			'message'	: 'You are about to delete this item. <br />It cannot be restored at a later time! Continue?',
			'buttons'	: {
				'Valider'	: {
					'class'	: 'blue',
					'action': function(){
						elem.slideUp();
					}
				},
				'Annuler'	: {
					'class'	: 'gray',
					'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
				}
			}
		});
		
	}
	
});