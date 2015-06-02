<?php
function ObjetoSelectTpDeficiencia($codigodescdefic)
{
?>
       <?php
       $sql = pg_query("select * from tpdeficiencia order by 2");
       while($vetor = pg_fetch_array($sql)) {
        ?>
      <option value="<?php echo $vetor['descricaotpdefic']; ?>"><?php echo $vetor['descricaotpdefic'];?></option>
         <?php  } ?>
         </select>
<?php }  ?>

<?php
function ObjetoSelectDescDeficiencia($CodigoDescDefic)
{
?>
       <?php
       $sql = pg_query("select * from descdeficiencia order by 2");
       while($vetor = pg_fetch_array($sql)) {
        ?>
      <option value="<?php echo $vetor['descricaodefic']; ?>"><?php echo $vetor['descricaodefic'];?></option>
         <?php  } ?>
         </select>
<?php }


function UltimoCodigoAluno()
{
$sql = pg_query("select codigo FROM Alunos order by codigo desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function UltimoCodigoCurso()
{
$sql = pg_query("select CodigoCurso FROM Cursos order by CodigoCurso desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function  UltimoCodigoDescDefic()
{
$sql = pg_query("select CodigoDescDefic FROM DescDeficiencia order by CodigoDescDefic desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}

function  UltimoCodigoTpDefic()
{
$sql = pg_query("select CodigoTpDefic FROM TpDeficiencia order by CodigoTpDefic desc limit 1");
$vetor = pg_fetch_array($sql);
return $vetor[0];
}
                       ?>
