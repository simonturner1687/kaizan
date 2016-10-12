var version = "uk";

var custom = {

	init:function(){

		$.get('lotto/ip.php?get', function(data){
			version = data.currancy;
			custom.loadForm();
		}, 'json');

		$('.country_change').change(function(e){
			e.preventDefault();
			version = $(this).val();
			custom.loadForm();
		});

		if($(window).width() < 768){
			$('.country_change option[value="uk"]').text("UK");
			$('.country_change option[value="us"]').text("US");
		}
	},

	loadForm:function(){
		$('#response').html('');

		$.get("lotto/load_form.php?version="+version, function(data){
			$('#main').html(data);

			// Validate The Form
			custom.numberValidation();

			$('#LottoNumbers .form-control').tooltipster({
		        trigger: 'custom',
		        onlyOne: true,
		        position: 'bottom'
		    });

		    $('.numbers li:first-child .form-control').focus();

			$.validator.addMethod("checkForDuplicate", function (value, element) {

		        var timeRepeated = 0;

				$('#LottoNumbers .form-control').each(function () {
		            if ($(this).val() === value) {
		                timeRepeated++;
		            }
		        });
		        if (timeRepeated === 1 || timeRepeated === 0) {
		            return true
		        }
		        else { 
		            return false
		        }
		    }, 'duplicate');

			var validator = $('#LottoNumbers').validate({
				errorPlacement: function (error, element) {
		            var lastError = $(element).data('lastError'),
		                newError = $(error).text();

		            $(element).data('lastError', newError);

		            if(newError !== '' && newError !== lastError){
		                $(element).tooltipster('content', newError);
		                $(element).tooltipster('show');
		            }
		        },
		        success: function (label, element) {
		            $(element).tooltipster('hide');
		        },
				rules: {
					number1: {
						required: true,
						number: true,
						checkForDuplicate: true,
						max: custom.maxLimit()
					},
					number2: {
						required: true,
						number: true,
						checkForDuplicate: true,
						max: custom.maxLimit()
					},
					number3: {
						required: true,
						number: true,
						checkForDuplicate: true,
						max: custom.maxLimit()
					},
					number4: {
						required: true,
						number: true,
						checkForDuplicate: true,
						max: custom.maxLimit()
					},
					number5: {
						required: true,
						number: true,
						checkForDuplicate: true,
						max: custom.maxLimit()
					},
					number6: {
						required: function(){
							return $('input[name="number6"]').length
						},
						number: true,
						checkForDuplicate: true,
						max: custom.maxLimit()
					},
					bonus: {
						required: function(){
							return $('input[name="bonus"]').length
						},
						number: true,
						checkForDuplicate: true,
						max: 29
					},
					
				},
				messages: {
					number1: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					},
					number2: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					},
					number3: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					},
					number4: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					},
					number5: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					},
					number6: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					},
					bonus: {
						required: "Enter a number",
						number: "Not a number",
						checkForDuplicate: "Unique numbers only",
						max: "Max number is "+custom.maxLimit()
					}

				},
				submitHandler:function(form){
					var array = $('#LottoNumbers').serialize();

					$.get("lotto/show_numbers.php?"+array+"&version="+version, function(data){
						
						$('#loader').show();
						$('#main').html(data);

					});

					$.ajax({
						url: 'lotto/check-numbers.php',
						method: 'GET',
						data: array+"&version="+version,
						success:function(data2){
							$('#response').html(data2);
							$('#loader').hide();
							$('body').animate({
								scrollTop: $('#response').offset().top
							}, 200);

							var total_won = $('#prize-money h1').html();

							$('.social-share').html(
								'<a href="http://twitter.com/share?url=http://www.mrgamez.com/lottery-calculator/&text=Would you be richer than me if we both played the lottery? I would have won '+total_won+'!" target="_blank" class="share-btn twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=http://www.mrgamez.com/lottery-calculator/" target="_blank" class="share-btn google-plus"><i class="fa fa-google-plus"></i></a><a href="http://www.facebook.com/sharer/sharer.php?u=http://www.mrgamez.com/lottery-calculator/" target="_blank" class="share-btn facebook"><i class="fa fa-facebook"></i></a><a href="http://www.linkedin.com/shareArticle?url=http://www.mrgamez.com/lottery-calculator/&summary=Would you be richer than me if we both played the lottery? I would have won '+total_won+'!&source=http://www.mrgamez.com/lottery-calculator/" target="_blank" class="share-btn linkedin"><i class="fa fa-linkedin"></i></a>'
							);

							$('#embedButton').click(function(e){
								e.preventDefault();
								$('#embedModal').modal('show');
							});

							$('#shareButton').click(function(e){
								e.preventDefault();
								$('#shareModal').modal('show');
							});

							$('#replayButton').click(function(e){
								e.preventDefault();
								custom.loadForm();
							});

						},
					    error: function(xhr, textStatus, errorThrown){
					       console.log(xhr);
					       console.log(textStatus);
					       console.log(errorThrown);
					    }
					});
				}
			});



		});
	},

	numberValidation:function(){
		$('#LottoNumbers .form-control').keydown(function(e){
			// Make sure they enter numbers!
			if (e.which == 9) {

			} else if(e.which == 13){
				
			} else if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		        return false;
		    } 

		});

		$('#LottoNumbers .form-control').keyup(function(e){
			if($(this).val().length == 2){
				var first_number = parseInt($(this).val().slice(0, 1));

				if(version == 'uk'){
					if(first_number >= 6){
						$(this).val($(this).val().substring(0, 1));
					}
				} else {
					if(first_number >= 7){
						$(this).val($(this).val().substring(0, 1));
					}
				}
				
			} else 
			if($(this).val().length > 2){
				$(this).val($(this).val().substring(0, 2));
			}
		});
	},

	isUnique:function(val){
		var timeRepeated = 0;

		$('#LottoNumbers .form-control').each(function () {
            if ($(this).val() === val) {
                timeRepeated++;
            }
        });
        if (timeRepeated === 1 || timeRepeated === 0) {
            return true
        }
        else { 
            return false
        }
	},
	maxLimit:function(){
		return (version == "uk" ? 59 : 69);
	}

}

$(function(){
	custom.init();
});