jQuery(document).ready(function(){

	var d = new Date();
	var Rich_Web_CS_Contact_Form_DatePicker_Format = jQuery('.Rich_Web_CS_Contact_Form_DatePicker_Format').val();
	var Rich_Web_CS_Contact_Form_DatePicker_Months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var Rich_Web_CS_Contact_Form_DatePicker_Current = jQuery('.Rich_Web_CS_Contact_Form_DatePicker_Current').val();
	var Rich_Web_CS_Contact_Form_TimePicker_Current = jQuery('.Rich_Web_CS_Contact_Form_TimePicker_Current').val();
	if(Rich_Web_CS_Contact_Form_DatePicker_Current == 'current')
	{
		if(parseInt(parseInt(d.getMonth())+1) < 10)
		{
			var dgetMonth = '0' + parseInt(parseInt(d.getMonth())+1);
		}
		else
		{
			var dgetMonth = parseInt(parseInt(d.getMonth())+1);
		}
		if(d.getDate() < 10)
		{
			var dgetDate = '0' + d.getDate();
		}
		else
		{
			var dgetDate = d.getDate();
		}

		if(Rich_Web_CS_Contact_Form_DatePicker_Format == 'yy-mm-dd')
		{
			var DatePicker_Rich_Web = d.getFullYear() + '-' + dgetMonth + '-' + dgetDate;
		}
		else if(Rich_Web_CS_Contact_Form_DatePicker_Format == 'yy MM dd')
		{
			var DatePicker_Rich_Web = d.getFullYear() + ' ' + Rich_Web_CS_Contact_Form_DatePicker_Months[d.getMonth()] + ' ' + dgetDate;
		}
		else if(Rich_Web_CS_Contact_Form_DatePicker_Format == 'dd-mm-yy')
		{
			var DatePicker_Rich_Web = dgetDate + '-' + dgetMonth + '-' + d.getFullYear();
		}
		else if(Rich_Web_CS_Contact_Form_DatePicker_Format == 'dd MM yy')
		{
			var DatePicker_Rich_Web = dgetDate + ' ' + Rich_Web_CS_Contact_Form_DatePicker_Months[d.getMonth()] + ' ' + d.getFullYear();
		}
		else if(Rich_Web_CS_Contact_Form_DatePicker_Format == 'mm-dd-yy')
		{
			var DatePicker_Rich_Web = dgetMonth + '-' + dgetDate + '-' + d.getFullYear();
		}
		else if(Rich_Web_CS_Contact_Form_DatePicker_Format == 'MM dd, yy')
		{
			var DatePicker_Rich_Web = Rich_Web_CS_Contact_Form_DatePicker_Months[d.getMonth()] + ' ' + dgetDate + ', ' + d.getFullYear();
		}
	}

	if(Rich_Web_CS_Contact_Form_TimePicker_Current == 'current')
	{
		if(d.getHours() < 10)
		{
			dgetHours = '0'+ d.getHours();
		}
		else
		{
			dgetHours = d.getHours();
		}
		if(d.getMinutes() < 10)
		{
			dgetMinutes = '0'+ d.getMinutes();
		}
		else
		{
			dgetMinutes = d.getMinutes();
		}
		jQuery('.Rich_Web_CS_Contact_Form_TimePicker').val(dgetHours + ':' + dgetMinutes);
	}
	jQuery('.Rich_Web_CS_Contact_Form_DataPicker').val(DatePicker_Rich_Web);
	
	jQuery('.Rich_Web_CS_Contact_Form_DataPicker').datepicker({dateFormat: Rich_Web_CS_Contact_Form_DatePicker_Format});

	jQuery(".Rich_Web_CS_Contact_Form_Phone").intlTelInput({
      	allowDropdown: true,
  		autoHideDialCode: true,
      	autoPlaceholder: "off",
      	nationalMode: true,
      	numberType: "MOBILE",
      	separateDialCode: true,
    });
    jQuery(".Rich_Web_CS_Contact_Form_Country").countrySelect({

    });

    jQuery('.Rich_Web_CS_Contact_Form_Media_Div').click(function(){
		var Rich_Web_CS_Contact_Form_MediaID = jQuery(this).find('input[type=file]').attr('id');
		var Zint=setInterval(function(){ 
			var code=jQuery('#'+Rich_Web_CS_Contact_Form_MediaID);
			if(code.val())
			{
				jQuery('#'+Rich_Web_CS_Contact_Form_MediaID+'_div').html(code.val());
				clearInterval(Zint);				
			}
		}, 300);	
	})	
})
function Rich_Web_CS_Forms_Check_Privacy(Forms_ID)
{
	var Rich_Web_CS_Contact_Form_Privacy_Required = jQuery('.Rich_Web_CS_Contact_Form_Privacy_Required').val();
	var Rich_Web_CS_Forms_Hidden_11 = jQuery('#Rich_Web_CS_Forms_Hidden_11_'+Forms_ID).val(); // Required Field Is Empty
	var Privacy = 'checked';
	if(Rich_Web_CS_Contact_Form_Privacy_Required == 'noprivacy' || Rich_Web_CS_Contact_Form_Privacy_Required == '')
	{
		Privacy = 'checked';
	}
	else if(Rich_Web_CS_Contact_Form_Privacy_Required == 'required')
	{

		if(jQuery('#Rich_Web_CS_Contact_Form_Privacy_'+Forms_ID).prop("checked"))
		{
			Privacy = 'checked';
			jQuery('#Rich_Web_CS_Contact_Form_Privacy_'+Forms_ID+'_Span').removeClass('Rich_Web_CS_Contact_Form_Span_Error');
			jQuery('#Rich_Web_CS_Contact_Form_Privacy_'+Forms_ID+'_Span').html('');
		}
		else
		{
			jQuery('#Rich_Web_CS_Contact_Form_Privacy_'+Forms_ID+'_Span').addClass('Rich_Web_CS_Contact_Form_Span_Error');
			jQuery('#Rich_Web_CS_Contact_Form_Privacy_'+Forms_ID+'_Span').html(Rich_Web_CS_Forms_Hidden_11);
			Privacy = 'nochecked';
		}
	}		
	return Privacy;
}