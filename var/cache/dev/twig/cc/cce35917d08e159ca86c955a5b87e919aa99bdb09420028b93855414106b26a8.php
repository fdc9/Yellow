<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c3ddb75acad9502a7074dd1a37596775f86480b54b462f68f989e79a96ef60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9e535918246ea0ca211ec7624720d66478c583ea2ed1ce85c786ce1ebbb3daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e535918246ea0ca211ec7624720d66478c583ea2ed1ce85c786ce1ebbb3daf->enter($__internal_e9e535918246ea0ca211ec7624720d66478c583ea2ed1ce85c786ce1ebbb3daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e9ca4950cad8db963481e39e42d642631f1c489d0456096b14ded5d2cfd59033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ca4950cad8db963481e39e42d642631f1c489d0456096b14ded5d2cfd59033->enter($__internal_e9ca4950cad8db963481e39e42d642631f1c489d0456096b14ded5d2cfd59033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e9e535918246ea0ca211ec7624720d66478c583ea2ed1ce85c786ce1ebbb3daf->leave($__internal_e9e535918246ea0ca211ec7624720d66478c583ea2ed1ce85c786ce1ebbb3daf_prof);

        
        $__internal_e9ca4950cad8db963481e39e42d642631f1c489d0456096b14ded5d2cfd59033->leave($__internal_e9ca4950cad8db963481e39e42d642631f1c489d0456096b14ded5d2cfd59033_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
