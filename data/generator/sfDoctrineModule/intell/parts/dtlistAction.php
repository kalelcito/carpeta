public function executeDtlist(sfWebRequest $request)
{
sfContext::getInstance()->getConfiguration()->loadHelpers('Url');

$sino=array(sfConfig::get('app_template_no'),sfConfig::get('app_template_si'));


$columns=array(<?php foreach ($this->getColumns() as $column): ?>'<?php echo $column->getPhpName() ?>',<?php endforeach; ?>);
$table='<?php echo $this->getModelClass() ?>';
$buscar=$request->getParameter('sSearch',"");

$qt = Doctrine_Query::create()
->select('count('.$columns[0].') as total')
->from($table);
$total=$qt->execute();

$total1=$total[0]->getTotal();
$total2=$total1;

$q = Doctrine_Query::create()
->select(implode(',', $columns))
->from($table)
->orderBy($columns[intval($request->getParameter('iSortCol_0',0))].' '.($request->getParameter('sSortDir_0','ASC')))
->limit(intval($request->getParameter('iDisplayLength',10)))
->offset(intval($request->getParameter('iDisplayStart',0)));

if($buscar!=""){
$q->where($columns[1].' LIKE ?', '%'.$buscar.'%');

$qt = Doctrine_Query::create()
->select('count('.$columns[0].') as total')
->from($table)
->where($columns[1].' LIKE ?', '%'.$buscar.'%');

$total=$qt->execute();
$total2=$total[0]->getTotal();
}

$list=$q->execute();

$aaData = array();
$i=1;
foreach ($list as $v)
{
$aaData[] = array(
<?php foreach ($this->getColumns() as $column): ?>
    <?php if ($column->isPrimaryKey()): $nc=sfInflector::camelize($column->getPhpName()); $ncl=$column->getPhpName();  ?>
        <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
            '<a href="'.url_for('<?php echo $this->getUrlForAction(isset($this->params['with_show']) && $this->params['with_show'] ? 'show' : 'edit') ?>', $<?php echo $this->getSingularName() ?>).'">'. $v->get<?php echo sfInflector::camelize($column->getPhpName()) ?>()</a>',
        <?php else: ?>
            '<a href="'.url_for('<?php echo $this->getModuleName() ?>/<?php echo isset($this->params['with_show']) && $this->params['with_show'] ? 'show' : 'edit' ?>?<?php echo $column->getPhpName() ?>='.$v->get<?php echo sfInflector::camelize($column->getPhpName()) ?>()).'">'. $v->get<?php echo sfInflector::camelize($column->getPhpName()) ?>().'</a>',
        <?php endif; ?>
    <?php else: ?>
        <?php if ($column->getType()=='boolean' ||  $column->getType()=='BOOLEAN'): ?>
            $sino[$v->get<?php echo sfInflector::camelize($column->getPhpName()) ?>()],
        <?php else: ?>
            $v->get<?php echo sfInflector::camelize($column->getPhpName()) ?>(),
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
'<div class="btn-group btn-group-xs">
    <a href="'.url_for('<?php echo $this->getModuleName() ?>/show?<?php echo $ncl ?>='.$v->get<?php echo $nc; ?>()).'" data-toggle="tooltip" title="Ver" class="btn btn-default">
        <i class="fa fa-search"></i>
    </a>
    <a href="'.url_for('<?php echo $this->getModuleName() ?>/edit?<?php echo $ncl ?>='.$v->get<?php echo $nc; ?>()).'" data-toggle="tooltip" title="Editar" class="btn btn-default">
        <i class="fa fa-edit"></i>
    </a>
</div>'
);
$i++;
}

$output = array(
"sEcho"=> intval($request->getParameter('sEcho')),
"iTotalRecords" => $total1,
"iTotalDisplayRecords" => $total2,
"aaData" => $aaData,
);

$this->getResponse()->setContent(json_encode($output));

$this->setLayout(false);
return sfView::NONE;
}
