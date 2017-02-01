<div class="col-lg-4 col-md-6">

	<div class="panel panel-default" id="munkiinfo-munkiprotocol-widget">

	  <div class="panel-heading" data-container="body" data-i18n="[title]widget.munkiinfo.munkiprotocol.tooltip">

	    <h3 class="panel-title"><i class="fa fa-magic"></i> <span data-i18n="widget.munkiinfo.munkiprotocol.title"></span></h3>

	  </div>

	  <div class="panel-body text-center"></div>

	</div><!-- /panel -->

</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    $.getJSON( appUrl + '/module/munkiinfo/get_protocol_stats', function( data ) {
	if(data.error){
		//alert(data.error);
		return;
	}

		var panel = $('#munkiinfo-munkiprotocol-widget div.panel-body'),
			baseUrl = appUrl + '/module/munkiinfo/listing';
		panel.empty();

		// Set statuses
		panel.append(' <a href="'+baseUrl+'#protocol = http" class="btn btn-danger"><span class="bigger-150">'+data.http+'</span><br>'+i18n.t('widget.munkiinfo.munkiprotocol.http')+'</a>');
		panel.append(' <a href="'+baseUrl+'#protocol = https" class="btn btn-success"><span class="bigger-150">'+data.https+'</span><br>'+i18n.t('widget.munkiinfo.munkiprotocol.https')+'</a>');
		panel.append(' <a href="'+baseUrl+'" class="btn btn-info"><span class="bigger-150">'+data.localrepo+'</span><br>'+i18n.t('widget.munkiinfo.munkiprotocol.localrepo')+'</a>');

    });
});


</script>