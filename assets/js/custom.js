	function currencyFormat(value) {
		value = value.replace(/\./gi,'');
		value = value.replace(/\,/gi,'');
		var panjang = value.length - 1;
		var hasil = '';
		var count = 0;
		for(i=panjang;i>=0;i--)
		{
			if(count == 3)
			{
				hasil = value[i] + '.' + hasil;
				count = 1;
			}
			else
			{
				hasil = value[i] + hasil;
				count++;
			}
		}
		return hasil;
	}

	//JQuery Function buat konfirmasi hapus atau ngga
	$(function() {
		//get all delete links (Note the class I gave them in the HTML)
		$(".delete-link").click(function() {
		//Basically, if confirm is true (OK button is pressed), then
		//the click event is permitted to continue, and the link will
		//be followed - however, if the cancel is pressed, the click event will be stopped here.
		return confirm("Hapus data ini?");
		});
		
		$("input.currencyType").keyup(function(){
		$(this).val(currencyFormat($(this).val()));
		});
		
		$(function() {
		$( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
		});
	});