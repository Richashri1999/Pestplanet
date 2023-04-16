$(document).ready(function(){
	// alert(678)

  
	$(document).ready(function(){
		// alert(1)
		$(".service").hide();
		$(".servicedetail").hide();
		$("#Add-ServiceCategory").click(function(){
			// alert(3)
			// window.location.href="";
		    $(".service").hide();
			$(".servicedetail").hide();
			$(".category").show();
			$("#Add-Service").css("background-image","unset");
			$("#Add-ServiceDetail").css("background-image","unset");
			$(this).css("background-image","linear-gradient(to right,  red ,lightblue)");
		})
		$("#Add-Service").click(function(){
			// alert(4)
			// window.location.href="../../main/admin/adminpower.php";
			// location.reload();
			$(".category").hide();
			$(".servicedetail").hide();
			$(".service").show();
			$("#Add-ServiceCategory").css("background-image","unset");
			$("#Add-ServiceDetail").css("background-image","unset");
			$(this).css("background-image","linear-gradient(to right,  red ,lightblue)");
		})
		$("#Add-ServiceDetail").click(function(){
			// alert(5)
			// window.location.href="";
			$(".category").hide();
		    $(".service").hide();
			$(".servicedetail").show();
			$("#Add-ServiceCategory").css("background-image","unset");
			$("#Add-Service").css("background-image","unset");
			$(this).css("background-image","linear-gradient(to right,  red ,lightblue)");

		})
	})



	$("#btnaddcategory").click(function(){
		// alert(1);
		data=$("#categoryform").serialize()
		// alert(data)
		$.ajax({
			url: "../../ajax/adminpower.php",
			data: data,
			type: "post",
			success:function(res)
			{
				$("#errcategory").html("please wait...")
				setTimeout(function(){
					$("#errcategory").html(res)
				},1000)
			}
		})
	})


	// alternaative to above to solve image issue
	$("#btnaddservice").click(function(){
		// alert();
		$("#serviceform").click(function(){
		
		var form_data = new FormData(this);     
	
		$.ajax({
        		url: '../../ajax/adminpower1.php', 
        		cache: false,
        		contentType: false,
        		processData: false,
        		data: form_data,                         
        		type: 'post',
        		success: function(response){
            		
            		$("#errservice").html("Please wait...")

        			setTimeout(function(){
        				$("#errservice").html(response)
        			},1000)
        		}
     		});             

	})
	})
	

	$("#btnaddcost").click(function(){
		// alert(111);
		data=$("#costform").serialize()
		// alert(data);             // showing   :)
		$.ajax({
			url : '../../ajax/adminpower2.php',
            data : data,
            type : 'post',
            success : function(res)
            {
            	$("#errcost").html("please wait...")
				setTimeout(function(){
					$("#errcost").html(res)
				},1000)
            }

		})

	})

})