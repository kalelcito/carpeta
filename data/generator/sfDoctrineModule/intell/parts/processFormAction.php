  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $<?php echo $this->getSingularName() ?> = $form->save();
      $this->getUser()->setFlash('exito', 'El registro se actualizo correctamente');    
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
      $this->redirect('@<?php echo $this->getUrlForAction('index') ?>);
<?php else: ?>
      //$this->redirect('<?php echo $this->getModuleName() ?>/edit?<?php echo $this->getPrimaryKeyUrlParams() ?>);
      $this->redirect('<?php echo $this->getModuleName() ?>/index');
<?php endif; ?>
    }else{
      $this->getUser()->setFlash('error', 'Ocurrio un error al procesar la solicitud');    
    }
    
  }
