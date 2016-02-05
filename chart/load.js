        $(function (){
           /* $('#loading').ajaxStart(function(){
                $(this).fadeIn();
            }).ajaxStop(function(){
                $(this).fadeOut();
            });*/
            
            $('.bar a').click(function() {
		var url = $(this).attr('href');
		$('#utama').load(url);
		return false;
	});
    });
    
    $(function (){
                       
            $('.menu a').click(function() {
		var url = $(this).attr('href');
		$('#main').load(url);
		return false;
	});
    });
    
    $(function (){           
            $('.daftar_peminjaman a').click(function() {
		var url = $(this).attr('href');
		$('#peminjaman').load(url);
		return false;
	});
    });
    
    