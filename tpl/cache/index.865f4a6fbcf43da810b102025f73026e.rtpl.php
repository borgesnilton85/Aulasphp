<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>Teste de Template</p>
<p>Versao do PHP <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
<p>Hoje é <?php echo htmlspecialchars( $data, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>