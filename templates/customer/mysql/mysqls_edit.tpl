$header
    <form method="post" action="$filename">
     <input type="hidden" name="s" value="$s">
     <input type="hidden" name="page" value="$page">
     <input type="hidden" name="action" value="$action">
     <input type="hidden" name="id" value="$id">
     <table cellpadding="3" cellspacing="1" border="0" align="center" class="maintable">
      <tr>
       <td colspan="2" class="title">{$lng['menue']['main']['changepassword']}</td>
      </tr>
      <tr>
       <td class="maintable">{$lng['mysql']['databasename']}:</td>
       <td class="maintable" nowrap>{$result['databasename']}</td>
      </tr>
      <tr>
       <td class="maintable">{$lng['mysql']['databasedescription']}:</td>
       <td class="maintable"><input type="text" name="description" maxlength="100" value="{$result['description']}"></td>
      </tr>
      <tr>
       <td class="maintable">{$lng['changepassword']['new_password_ifnotempty']}:</td>
       <td class="maintable"><input type="password" name="password" maxlength="50"></td>
      </tr>
      <tr>
       <td class="maintable" colspan="2" align="right"><input type="hidden" name="send" value="send"><input type="submit" value="{$lng['panel']['save']}"></td>
      </tr>
     </table>
    </form>
$footer