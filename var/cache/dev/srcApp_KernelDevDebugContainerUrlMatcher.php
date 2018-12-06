<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:72)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                            .'|movies(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:142)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:180)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:220)'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            42 => array(array(array('_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index', '_format'), null, null, false, null)),
            72 => array(array(array('_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array('_format'), null, null, false, null)),
            107 => array(array(array('_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName', '_format'), null, null, false, null)),
            142 => array(
                array(array('_route' => 'api_movies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_movies_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            180 => array(
                array(array('_route' => 'api_movies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_movies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_movies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Movie', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            220 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
        );
    }
}
