<!-- BEGIN: MAIN -->
<script type="text/javascript">
	var nonecat = '{PHP.L.No}';
	var incat = '{PHP.L.incat}';
</script>	
<script src="{PHP.cfg.plugins_dir}/customnews/js/customnews.admin.js" type="text/javascript"></script>	
<div id="catgenerator" style="display:none"> <div style="display:none">{MAINCATEGORY}</div>
	<table class="cells">
		<tr>
			<td class="coltop width5">{PHP.L.Code} *</td>
			<td class="coltop width5">{PHP.L.Count}</td>
			<td class="coltop width5">{PHP.L.Part} **</td>
			<td class="coltop width10">{PHP.L.Category}</td>
			<td class="coltop width30">{PHP.L.Where} ***</td>
			<td class="coltop width20">{PHP.L.Order} ****</td>
			<td class="coltop width10">{PHP.L.Tag}</td>
			<td class="coltop width10">{PHP.L.Template}</td>
			<td class="coltop width5">&nbsp;</td>
		</tr>
		<!-- BEGIN: ADDITIONAL -->
		<tr class="newscat">
			<td>
				<input type="text" class="text cacode" name="cacode" value="{CODE}" size="4" maxlength="255" />
			</td>
			<td><input type="text" class="text cacount" name="cacount" value="{COUNT}" size="3" maxlength="5" /></td>
			<td><input type="text" class="text capart" name="capart" value="{PART}" size="5" maxlength="100" /></td>
			<td><input type="text" class="text cacat" name="cacat" value="{CAT}" size="4" maxlength="4" /></td>
			<td><input type="text" class="text cawhere" name="cawhere" value="{WHERE}" size="20" maxlength="255" /></td>
			<td><input type="text" class="text caorder" name="caorder" value="{ORDER}" size="10" maxlength="255" /></td>
			
			<td class="cat_desc"><span class="cag">&nbsp;</span></td>
			<td class="cat_desc"><span class="caf">&nbsp;</span></td>
			<td colspan="2" class="cat_exists" style="color:red; display:none;">{PHP.L.Newscat_exists}</td>
			<td><button name="deloption" class="deloption" type="button"  style="display:none">{PHP.L.Delete}</button></td>
		</tr>
		<!-- END: ADDITIONAL -->
		<tr id="addtr">
			<td class="valid" colspan="9"><button name="addoption" id="addoption" type="button">{PHP.L.Add}</button></td>
		</tr>
	</table>
	<div class="padding10">
	<p class="small">* {PHP.L.Code_help}</p>
	<p class="small">** {PHP.L.Part_help}</p>
	<p class="small">*** {PHP.L.Where_help}</p>
	<p class="small">**** {PHP.L.Order_help}</p>
	</div>
</div>

<!-- END: MAIN -->