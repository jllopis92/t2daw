

<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
  </tr>
  <tbody>
    <?php 
    //$departments;
    $respuesta;
    foreach($respuesta as $resp): ?>
      <tr>
        <td><?php echo $resp->first_name ?></td>
        <td><?php echo $resp->last_name ?></td>
      </tr>
    <?php endforeach;?>
  </tbody>
</table>