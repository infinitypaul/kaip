<?php
namespace Uploadcare;

class Widget
{
  /**
   * Uploadcare widget version
   */
  const version = '2.9.0';

  /**
   * Api instance
   *
   * @var Api
   */
  private $api = null;

  /**
   * Constructor
   *
   * @param Api $api
   */
  public function __construct(Api $api)
  {
    $this->api = $api;
  }

  /**
   * Returns <script> sections to include Uploadcare widget
   *
   * @param string $version Uploadcare version
   * @param bool $async
   * @return string
   */
  public function getScriptTag($version = null, $async = false, $full = true)
  {
    $async_attr = $async ? 'async="true"' : '';
    $result = <<<EOT
<script>UPLOADCARE_PUBLIC_KEY = "{$this->api->getPublicKey()}";</script>
<script {$async_attr} src="{$this->getScriptSrc($version, $full)}" charset="UTF-8"></script>
EOT;
    return $result;
  }

  /**
   * Return url for javascript widget.
   * If no version is provided method will use default(current) version
   *
   * @param string $version Version of Uploadcare.com widget
   * @return string
   */
  public function getScriptSrc($version = null, $full = true)
  {
    if (!$version) {
      $version = self::version;
    }
    if ($full) {
      $tail = "uploadcare.full.min.js";
    } else {
      $tail = "uploadcare.min.js";
    }

    return sprintf($this->api->getCdnUri() . '/widget/%s/uploadcare/'. $tail, $version);
  }

  /**
   * Gets input tag to use with widget
   *
   * @param string $name Input name
   * @param array $attribs Custom attributes to include
   * @return string
   */
  public function getInputTag($name, $attribs = array())
  {
    $to_compile = array();
    foreach ($attribs as $key => $value) {
      $to_compile[] = sprintf('%s="%s"', $key, $value);
    }
    return sprintf('<input type="hidden" role="uploadcare-uploader" name="%s" data-upload-url-base="" %s />', $name, join(' ', $to_compile));
  }
}
