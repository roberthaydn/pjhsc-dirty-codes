$("select#select-a").change(function(){
    //process($(this).children(":selected").html());
    //alert('hello');
    var selectedA = $(this).children(':selected').val();

   // alert(selected);

   $('#select-b option').each(function(index, value) {
   		//var array = $(this).val();
   		var selectedB = index;

   		/*if(selectedB == 0) selectedB = 'empty';
   		if(selectedB == 1) selectedB = 'catbalogan';
		if(selectedB == 2) selectedB = 'tacloban';
		if(selectedB == 3) selectedB = 'calbayog';
		if(selectedB == 4) selectedB = 'tarangnan';*/

   		//console.log(selectedB);
   		if(selectedA == 'catbalogan') 
   		{

   			$("#select-b option[value='catbalogan']").attr('disabled', 'disabled');	 
   			$("#select-b option[value='tacloban']").removeAttr('disabled');
   			$("#select-b option[value='calbayog']").removeAttr('disabled');
   			$("#select-b option[value='tarangnan']").removeAttr('disabled');
   		}

   		if(selectedA == 'tacloban')
   		{
   			$("#select-b option[value='tacloban']").attr('disabled', 'disabled');	 
   			$("#select-b option[value='catbalogan']").removeAttr('disabled');
   			$("#select-b option[value='calbayog']").removeAttr('disabled');
   			$("#select-b option[value='tarangnan']").removeAttr('disabled');
   		}
   });

});