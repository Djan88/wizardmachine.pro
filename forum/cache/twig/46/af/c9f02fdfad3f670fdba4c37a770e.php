<?php

/* user_activate_passwd.txt */
class __TwigTemplate_46afc9f02fdfad3f670fdba4c37a770e extends Twig_Template
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
        // line 1
        echo "Subject: Активация нового пароля

Здравствуйте, ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "!

Вы получили это письмо потому, что вы (либо кто-то, выдающий себя за вас) попросили выслать новый пароль для вашей учётной записи на конференции «";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "». Если вы не просили выслать пароль, то не обращайте внимания на это письмо, если же подобные письма будут продолжать приходить, обратитесь к администратору конференции.

Прежде чем использовать новый пароль, вы должны его активировать. Для этого перейдите по ссылке:

";
        // line 9
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

В случае успешной активации вы сможете входить на конференцию, используя следующий пароль:

Пароль: ";
        // line 13
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "

Вы сможете сменить этот пароль на странице редактирования профиля в личном разделе. Если у вас возникнут какие-либо трудности, обратитесь к администратору конференции.

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  42 => 13,  35 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
