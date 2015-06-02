<?php
include ("conecta.php");
function UltimoFichaTabDeficientes()
{
$sql = pg_query("select ficha FROM tabdeficientes order by ficha desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}
function UltimoIdTabHistorico()
{
$sql = pg_query("select id FROM tabhistoricos order by id desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}
function getidhistoricos($ficha)
{
$sql = pg_query("select id from tabhistoricos where fichadeficiente = $ficha");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function getHistorico($ficha)
{
$sql = pg_query("select historico from tabhistoricos where fichadeficiente = $ficha");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function getPai($ficha)
{
$sql = pg_query("select pai from tabhistoricos where fichadeficiente = $ficha");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function getMae($ficha)
{
$sql = pg_query("select mae from tabhistoricos where fichadeficiente = $ficha");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function getMFamilia($ficha)
{
$sql = pg_query("select mfamilia from tabhistoricos where fichadeficiente = $ficha");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function getRFamilia($ficha)
{
$sql = pg_query("select rfamilia from tabhistoricos where fichadeficiente = $ficha");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function getTipoDeficiencia($ficha)
{
  $sql   = pg_query("SELECT DISTINCT tipodefic FROM tabdeficientes where ficha = $ficha");
  $vetor = pg_fetch_array($sql);
  return $vetor['tipodefic'];
}
function ObterTotalDefic($ficha)
{
  $sql   = pg_query("SELECT DISTINCT count(tipodefic) as total FROM tabdeficientes where ficha = $ficha");
  $vetor = pg_fetch_array($sql);
  return $vetor[0];
  
}

function UltimoCodigoTipoDeficientes()
{
$sql = pg_query("select codigo FROM tpdeficientes order by codigo desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function UltimoCodigoDescDeficientes()
{
$sql = pg_query("select codigo FROM descdeficientes order by codigo desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function UltimoCodigoMotDeficientes()
{
$sql = pg_query("select codigo FROM motdeficientes order by codigo desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}
function UltimoCodigoCondLocDeficientes
()
{
$sql = pg_query("select codigo FROM condlocdeficientes order by codigo desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}


function ObjetoSelectTpDeficiencia($codigo)
{
?>
       <?php
       $sql = pg_query("select * from tpdeficientes order by 2");
       while($vetor = pg_fetch_array($sql)) {
        ?>
      <option value="<?php echo $vetor['descricao']; ?>"><?php echo $vetor['descricao'];?></option>
         <?php  } ?>
         </select>
<?php }


function ObjetoSelectDescDeficiencia($codigo)
{
?>
       <?php
       $sql = pg_query("select * from descdeficientes order by 2");
       while($vetor = pg_fetch_array($sql)) {
        ?>
      <option value="<?php echo $vetor['descricao']; ?>"><?php echo $vetor['descricao'];?></option>
         <?php  } ?>
         </select>
<?php }

function ObjetoSelectMotDeficiencia($codigo)
{
?>
       <?php
       $sql = pg_query("select * from motdeficientes order by 2");
       while($vetor = pg_fetch_array($sql)) {
        ?>
      <option value="<?php echo $vetor['descricao']; ?>"><?php echo $vetor['descricao'];?></option>
         <?php  } ?>
         </select>
<?php }

function ObjetoSelectCondLocDeficiencia($codigo)
{
?>
       <?php
       $sql = pg_query("select * from condlocdeficientes order by 2");
       while($vetor = pg_fetch_array($sql)) {
        ?>
      <option value="<?php echo $vetor['descricao']; ?>"><?php echo $vetor['descricao'];?></option>
         <?php  } ?>
         </select>
<?php }



function CalculaIdade($dtnascimento) {

    $data_nasc = explode('/', $dtnascimento);
    $data = date('d/m/Y');
    $data = explode("/", $data);
    $anos = $data[0] - $data_nasc[0];

    if ($data_nasc[1] >= $data[1]){
        if ($data_nasc[2] <= $data[2]){
            return $anos; break;
        } else {
            return $anos-1;
            break;
        }
    } else {
        return $anos;
    }
}
?>