<?php

  /**
   * It is assumed that the reader of this page is familiar with the Notification widget Overview.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/notification
   * 
   */
  class KendoUiNotification extends javascript
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
      self::$mainJavaScriptCodeCStr .= "$(\"#{$htmlIdALStr}\").KendoUiNotification({\r\n";
      self::$mainJavaScriptCodeCStr .= self::toObject( javascript::$dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      self::$dataCArr = null;
    }
    
    /**
     * Indicates the period in milliseconds after which a notification can be dismissed (hidden) by the user.
     * @var $dataAX[ 'allowHideAfter' ]: ( Number ) ( default: 0 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-allowHideAfter
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;allowHideAfter: 1000<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function allowHideAfter ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "allowHideAfter" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'allowHideAfter' ] ) )
      {
        parent::addData ( "allowHideAfter", $dataAX[ 'allowHideAfter' ] );
        unset ( $dataAX[ 'allowHideAfter' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'allowHideAfter' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::allowHideAfter ( \$data[ 'allowHideAfter' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * Defines custom show and hide animations via an Kendo UI Animation object. Setting the value to false disables animations.
     * @var $dataAX[ 'animation' ]: ( Object | Boolean )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-animation
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;animation: false<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;animation: {<br>&nbsp;&nbsp;&nbsp;&nbsp;open: {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;effects: "slideIn:left"<br>&nbsp;&nbsp;&nbsp;&nbsp;},<br>&nbsp;&nbsp;&nbsp;&nbsp;close: {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;effects: "slideIn:left",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reverse: true<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function animation ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "animation" => $dataAX );
      
      if ( is_array ( $dataAX[ 'animation' ] ) )
      {
        parent::addData ( "animation", $dataAX[ 'animation' ] );
        unset ( $dataAX[ 'animation' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( is_bool ( $dataAX[ 'animation' ] ) )
      {
        parent::addData ( "animation", $dataAX[ 'animation' ] );
        unset ( $dataAX[ 'animation' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::animation ( \$data[ 'animation' ] type must be 'Object' | 'Boolean'" );
      }
      
    }
    
    
    /**
     * Defines the element to which the notifications will be appended or prepended (depending on the <a href="http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-stacking">stacking</a> direction).
     * @var $dataAX[ 'appendTo' ]: ( String | Element | jQuery ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-appendTo
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;div id="container"&gt;&lt;/div&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;appendTo: "#container"<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;div id="container"&gt;&lt;/div&gt;<br>&lt;script&gt;<br>var container = document.getElementById("container");<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;appendTo: container<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;div id="notification"&gt;&lt;/div&gt;<br>&lt;script&gt;<br>var element = $("#notification");<br>element.kendoNotification({<br>&nbsp;&nbsp;appendTo: element<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function appendTo ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "appendTo" => $dataAX );
      
      if ( is_string ( $dataAX[ 'appendTo' ] ) )
      {
        parent::addData ( "appendTo", $dataAX[ 'appendTo' ] );
        unset ( $dataAX[ 'appendTo' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'appendTo' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::appendTo ( \$data[ 'appendTo' ] type must be 'String' | 'Element' | 'jQuery'" );
      }
      
    }
    
    
    /**
     * Indicates the period in milliseconds after which a notification disappears automatically. Setting a zero value disables this behavior.
     * @var $dataAX[ 'autoHideAfter' ]: ( Number ) ( default: 5000 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-autoHideAfter
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;autoHideAfter: 3000<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;autoHideAfter: 0<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function autoHideAfter ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "autoHideAfter" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'autoHideAfter' ] ) )
      {
        parent::addData ( "autoHideAfter", $dataAX[ 'autoHideAfter' ] );
        unset ( $dataAX[ 'autoHideAfter' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'autoHideAfter' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::autoHideAfter ( \$data[ 'autoHideAfter' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * Determines whether the notifications will include a hide button. <strong>This setting works with the built-in templates only.</strong>
     * @var $dataAX[ 'button' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-button
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;button: true<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function button ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "button" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'button' ] ) )
      {
        parent::addData ( "button", $dataAX[ 'button' ] );
        unset ( $dataAX[ 'button' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'button' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::button ( \$data[ 'button' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Defines the notifications' height. Numbers are treated as pixels.
     * @var $dataAX[ 'height' ]: ( Number | String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-height
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;height: 50<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;height: "4em"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function height ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "height" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'height' ] ) )
      {
        parent::addData ( "height", $dataAX[ 'height' ] );
        unset ( $dataAX[ 'height' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( is_string ( $dataAX[ 'height' ] ) )
      {
        parent::addData ( "height", $dataAX[ 'height' ] );
        unset ( $dataAX[ 'height' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'height' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::height ( \$data[ 'height' ] type must be 'Number' | 'String'" );
      }
      
    }
    
    
    /**
     * Determines whether notifications can be hidden by clicking anywhere on their content.
     * @var $dataAX[ 'hideOnClick' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-hideOnClick
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;hideOnClick: false<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function hideOnClick ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "hideOnClick" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'hideOnClick' ] ) )
      {
        parent::addData ( "hideOnClick", $dataAX[ 'hideOnClick' ] );
        unset ( $dataAX[ 'hideOnClick' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'hideOnClick' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::hideOnClick ( \$data[ 'hideOnClick' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * <strong>This setting applies to popup notifications only, i.e. in cases when <b><u>appendTo</u></b> is not set.</strong> It determines the position of the first notification on the screen, as well as whether the notifications will move together with the page content during scrolling. <b><u>top</u></b> takes precedence over <b><u>bottom</u></b> and <b><u>left</u></b> takes precedence over <b><u>right</u></b>.
     * @var $dataAX[ 'position' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-position
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;pinned: true,<br>&nbsp;&nbsp;&nbsp;&nbsp;top: null,<br>&nbsp;&nbsp;&nbsp;&nbsp;left: null,<br>&nbsp;&nbsp;&nbsp;&nbsp;bottom: 20,<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 20<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * Determines the pixel position of the first popup notification with regard to the viewport's bottom edge.
     * @var $dataAX[ 'position' ][ 'bottom' ]: ( Number ) ( default: 20 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-position.bottom
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;bottom: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;left: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;pinned: false<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;top: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * Determines the pixel position of the first popup notification with regard to the viewport's left edge.
     * @var $dataAX[ 'position' ][ 'left' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-position.left
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;bottom: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;left: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;pinned: false<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;top: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * Determines whether the popup notifications will move together with the other page content during scrolling.
     * @var $dataAX[ 'position' ][ 'pinned' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-position.pinned
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;bottom: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;left: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;pinned: false<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;top: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * Determines the pixel position of the first popup notification with regard to the viewport's right edge.
     * @var $dataAX[ 'position' ][ 'right' ]: ( Number ) ( default: 20 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-position.right
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;bottom: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;left: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;pinned: false<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;top: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * Determines the position of the first popup notification with regard to the viewport's top edge. Numeric values are treated as pixels.
     * @var $dataAX[ 'position' ][ 'top' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-position.top
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;bottom: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;left: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;pinned: false<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;top: 30<br>&nbsp;&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function position ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "position" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'position' ][ 'bottom' ] ) )
      {
        parent::addData ( "position.bottom", $dataAX[ 'position' ][ 'bottom' ] );
        unset ( $dataAX[ 'position' ][ 'bottom' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'position' ][ 'bottom' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::position ( \$data[ 'position' ][ 'bottom' ] type must be 'Number'" );
      }
      
      if ( is_numeric ( $dataAX[ 'position' ][ 'left' ] ) )
      {
        parent::addData ( "position.left", $dataAX[ 'position' ][ 'left' ] );
        unset ( $dataAX[ 'position' ][ 'left' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'position' ][ 'left' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::position ( \$data[ 'position' ][ 'left' ] type must be 'Number'" );
      }
      
      if ( is_bool ( $dataAX[ 'position' ][ 'pinned' ] ) )
      {
        parent::addData ( "position.pinned", $dataAX[ 'position' ][ 'pinned' ] );
        unset ( $dataAX[ 'position' ][ 'pinned' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'position' ][ 'pinned' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::position ( \$data[ 'position' ][ 'pinned' ] type must be 'Boolean'" );
      }
      
      if ( is_numeric ( $dataAX[ 'position' ][ 'right' ] ) )
      {
        parent::addData ( "position.right", $dataAX[ 'position' ][ 'right' ] );
        unset ( $dataAX[ 'position' ][ 'right' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'position' ][ 'right' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::position ( \$data[ 'position' ][ 'right' ] type must be 'Number'" );
      }
      
      if ( is_numeric ( $dataAX[ 'position' ][ 'top' ] ) )
      {
        parent::addData ( "position.top", $dataAX[ 'position' ][ 'top' ] );
        unset ( $dataAX[ 'position' ][ 'top' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'position' ][ 'top' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::position ( \$data[ 'position' ][ 'top' ] type must be 'Number'" );
      }
      
      if ( is_array ( $dataAX[ 'position' ] ) )
      {
        parent::addData ( "position", $dataAX[ 'position' ] );
        unset ( $dataAX[ 'position' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'position' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::position ( \$data[ 'position' ] type must be 'Object'" );
      }
      
    }
    
    
    /**
     * Determines the direction in which multiple notification will stack (arrange) with regard to the first one. Possible values are <b><u>"up"</u></b>, <b><u>"right"</u></b>, <b><u>"down"</u></b>, <b><u>"left"</u></b> and <b><u>"default"</u></b>. The <b><u>"default"</u></b> setting takes into consideration the applied <b><u>position</u></b> settings and is evaluated to <b><u>"up"</u></b> or <b><u>"down"</u></b>.
     * @var $dataAX[ 'stacking' ]: ( String ) ( default: "default" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-stacking
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;position: {<br>&nbsp;&nbsp;&nbsp;&nbsp;top: 20,<br>&nbsp;&nbsp;&nbsp;&nbsp;right: 20<br>&nbsp;&nbsp;},<br>&nbsp;&nbsp;stacking: "down"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function stacking ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "stacking" => $dataAX );
      
      if ( is_string ( $dataAX[ 'stacking' ] ) )
      {
        parent::addData ( "stacking", $dataAX[ 'stacking' ] );
        unset ( $dataAX[ 'stacking' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'stacking' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::stacking ( \$data[ 'stacking' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Describes the HTML markup of the different notification types as Kendo UI template strings. The built-in types are <b><u>"info"</u></b>, <b><u>"success"</u></b>, <b><u>"warning"</u></b> and <b><u>"error"</u></b>.
     * <em>This documentation section assumes that you are familiar with <a href="/kendo-ui/framework/templates/overview">Kendo UI templates</a></em>.
     * @var $dataAX[ 'templates' ]: ( Array ) ( default: [] )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-templates
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br><br>&lt;script id="myAlertTemplate" type="text/x-kendo-template"&gt;<br>&nbsp;&nbsp;&lt;div class="myAlert"&gt;System alert generated at #= time # : #= myMessage #&lt;/div&gt;<br>&lt;/script&gt;<br><br>&lt;script&gt;<br>$(function(){<br>&nbsp;&nbsp;var notificationElement = $("#notification");<br><br>&nbsp;&nbsp;notificationElement.kendoNotification({<br>&nbsp;&nbsp;&nbsp;&nbsp;templates: [{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// define a custom template for the built-in "warning" notification type<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: "warning",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;template: "&lt;div class='myWarning'&gt;Warning: #= myMessage #&lt;/div&gt;"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}, {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// define a template for the custom "timeAlert" notification type<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type: "timeAlert",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;template: "&lt;div class='myAlert'&gt;System alert generated at #= time # : #= myMessage #&lt;/div&gt;"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// template content can also be defined separately<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//template: $("#myAlertTemplate").html()<br>&nbsp;&nbsp;&nbsp;&nbsp;}]<br>&nbsp;&nbsp;});<br><br>&nbsp;&nbsp;var n = notificationElement.data("kendoNotification");<br><br>&nbsp;&nbsp;// show a warning message using the built-in shorthand method<br>&nbsp;&nbsp;n.warning({<br>&nbsp;&nbsp;&nbsp;&nbsp;myMessage: "some warning message here"<br>&nbsp;&nbsp;});<br><br>&nbsp;&nbsp;// show a "timeAlert" message using the default show() method<br>&nbsp;&nbsp;n.show({<br>&nbsp;&nbsp;&nbsp;&nbsp;time: new Date().toLocaleTimeString(),<br>&nbsp;&nbsp;&nbsp;&nbsp;myMessage: "Server will be restarted."<br>&nbsp;&nbsp;}, "timeAlert");<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * <strong>Required.</strong> Specified a unique identifier, which is used to retrieve the correct template when a notification of this type is shown.
     * See the <a href="http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-templates">example above</a>.
     * @var $dataAX[ 'templates' ][ 'type' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-templates.type
     * 
     * Defines a Kendo UI template to be used with the corresponding notification type.
     * See the <a href="http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-templates">example above</a>.
     * @var $dataAX[ 'templates' ][ 'template' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-templates.template
     * @throws string type error
     */
    public function templates ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "templates" => $dataAX );
      
      if ( is_string ( $dataAX[ 'templates' ][ 'type' ] ) )
      {
        parent::addData ( "templates.type", $dataAX[ 'templates' ][ 'type' ] );
        unset ( $dataAX[ 'templates' ][ 'type' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'templates' ][ 'type' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::templates ( \$data[ 'templates' ][ 'type' ] type must be 'String'" );
      }
      
      if ( is_string ( $dataAX[ 'templates' ][ 'template' ] ) )
      {
        parent::addData ( "templates.template", $dataAX[ 'templates' ][ 'template' ] );
        unset ( $dataAX[ 'templates' ][ 'template' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'templates' ][ 'template' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::templates ( \$data[ 'templates' ][ 'template' ] type must be 'String'" );
      }
      
      if ( is_array ( $dataAX[ 'templates' ] ) )
      {
        parent::addData ( "templates", $dataAX[ 'templates' ] );
        unset ( $dataAX[ 'templates' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'templates' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::templates ( \$data[ 'templates' ] type must be 'Array'" );
      }
      
    }
    
    
    /**
     * Defines the notifications' width. Numbers are treated as pixels.
     * @var $dataAX[ 'width' ]: ( Number | String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/notification#configuration-width
     * 
     * @code
       &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;width: 300<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;span id="notification"&gt;&lt;/span&gt;<br>&lt;script&gt;<br>$("#notification").kendoNotification({<br>&nbsp;&nbsp;width: "20em"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function width ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "width" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'width' ] ) )
      {
        parent::addData ( "width", $dataAX[ 'width' ] );
        unset ( $dataAX[ 'width' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( is_string ( $dataAX[ 'width' ] ) )
      {
        parent::addData ( "width", $dataAX[ 'width' ] );
        unset ( $dataAX[ 'width' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'width' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNotification::width ( \$data[ 'width' ] type must be 'Number' | 'String'" );
      }
      
    }
    
    
  }