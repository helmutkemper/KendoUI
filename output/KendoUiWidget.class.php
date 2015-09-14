<?php

  /**
   * Base class of all Kendo UI widgets. Inherits from Observable.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/widget
   * 
   */
  class KendoUiWidget extends javascript
  {
    private $outputCStr;
    
    //---------- inicio codigo importante
    //
    //Coisas que não serão apagadas podem ser digitadas aqui dentro.
    //
    
    public function toHtmlOutput ( $htmlIdAStr, $extraAStr )
    {
      self::$mainHtmlCodeCStr .= "<input id=\"{$htmlIdAStr}\" {$extraAStr}>";
    }
    
    
    //---------- fim codigo importante
    
    public function toJavaScriptOutput ( $htmlIdALStr, $jsVarALStr = null )
    {
      if ( !is_null ( $jsVarALStr ) )
      {
        self::$mainJavaScriptCodeCStr .= "var {$jsVarALStr} = ";
      }
      self::$mainJavaScriptCodeCStr .= "$(\"#{$htmlIdALStr}\").KendoUiWidget({\r\n";
      self::$mainJavaScriptCodeCStr .= self::toObject( javascript::$dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      self::$dataCArr = null;
    }
    
  }