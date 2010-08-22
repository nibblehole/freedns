<?
      $content .= '
<form action="' . $PHP_SELF . '" method="post">
      <table id="createusertable">
      <tr><td align="right">
      ' . $l['str_login'] . ': </td><td><input type="text" name="loginnew"
      value="'.$loginnew.'">
      </td></tr>
      <tr><td align=right>
      ' . $l['str_your_valid_email'] . ': </td>
      <td><input type="text" name="email" value="'.$email.'">
      </td></tr>
      <tr><td align="right">
      ' . $l['str_new_password'] . ': </td>
      <td><input type="password" name="passwordnew">
      </td></tr>
      <tr><td align="right">
      ' . $l['str_confirm_password'] . ': </td>
      <td><input type="password" name="confirmpasswordnew">
      </td></tr>      ';

    if($config->advancedinterface){
      $content .= '<tr><td align="right">' . $l['str_advanced_interface']  . 
      '<br>(' . $l['str_advanced_interface_details'] . ')</td>
      <td><input type=checkbox name="advanced"';
      if($user->advanced || $_REQUEST['advanced']){
        $content .= ' checked';
      }
      $content .='></td></tr>
      ';
    }
    if($config->ipv6interface){
      $content .= '<tr><td align="right">' . 
      $l['str_ipv6_interface'] . '<br>(' . 
      $l['str_ipv6_interface_details'] . ')</td>
      <td><input type=checkbox name="ipv6"';
      if($user->ipv6 || $_REQUEST['ipv6']){
        $content .= ' checked';
      }
      $content .='></td></tr>
      ';
    }
    if($config->txtrecords){
      $content .= '<tr><td align="right">' . 
      $l['str_txt_records'] . '<br>(' . 
      $l['str_txt_records_details'] . ')</td>
      <td><input type=checkbox name="txtrecords"';
      if($user->txtrecords || $_REQUEST['txtrecords']){
        $content .= ' checked';
      }
      $content .='></td></tr>
      ';
    }
    if($config->srvrecords){
      $content .= '<tr><td align="right">' . 
      $l['str_srv_records'] . '<br>(' . 
      $l['str_srv_records_details'] . ')</td>
      <td><input type=checkbox name="srvrecords"';
      if($user->srvrecords || $_REQUEST['srvrecords']){
        $content .= ' checked';
      }
      $content .='></td></tr>
      ';
    }
    
    if ($user->authenticated)
      $nbrows = $user->nbrows > $nbrows ? $user->nbrows : $nbrows;
    else
      $nbrows = $_REQUEST['nbrows'] > $nbrows ? $_REQUEST['nbrows'] : $nbrows;
    if (!notnull($nbrows)) $nbrows = 3;
    if ($nbrows>16) $nbrows=16;
    $content .= '<tr><td align="right">' . 
    $l['str_number_of_rows_per_record'] . ':</td>
';
    $content .= '<td><input type=text name="nbrows" value="' . $nbrows . '" size="3"></td></tr>
';
      
    $content .= '<tr><td align="right">' . 
          $l['str_language']  . ':</td>
          <td><select name="newlang">';
    // select current available langs
    $list = GetDirList('includes/strings');
    reset($list);
    while($newlang = array_shift($list)){
      if(!strcmp($newlang,$lang)){
        $content .= '<option value="' . $lang . '" selected>' . $lang . '</option>';
      }else{
        $content .= '<option value="' . $newlang . '">' . $newlang . '</option>';      
      }
    }
    
    $content .= '</select></td></tr>';

      $content .= '
      <tr><td colspan="2">' . 
      sprintf($l['str_i_have_read_and_i_understand_discl_available_at_x'],
      '<br>
<a target=_blank href="disclaimer.php?language=' . $lang . '" 
onclick="window.open(\'disclaimer.php?language=' . $lang . '\',\'M\',\'toolbar=no,location=no,directories=no,status=no,alwaysraised=yes,dependant=yes,menubar=no,scrollbars=yes,resizable=yes,width=640,height=480\');
return false">' . $config->mainurl . 'disclaimer.php</a>') . '
       <input type="checkbox" name="ihaveread" value="1"></td></tr>
      <tr><td colspan="2" align="center">
      <input type="submit" class="submit" value="' . $l['str_create_my_user_button'] . '"></td></tr>
      </table>
</form>
';
?>
