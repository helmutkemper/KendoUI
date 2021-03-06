<?php

  /**
   * Represents the Kendo UI Sortable. Inherits from Widget.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable
   * By default when the Sortable widget is left with no items its height will become zero. This will prevent the user from being able to drop items back into it. To avoid this behaviour the developer should set the min-height CSS property of the sortable container.
   */
  class KendoUiSortable extends javascript
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
      self::$mainJavaScriptCodeCStr .= "$(\"#{$htmlIdALStr}\").KendoUiSortable({\r\n";
      self::$mainJavaScriptCodeCStr .= self::toObject( javascript::$dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      self::$dataCArr = null;
    }
    
    /**
     * Constrains the hint movement to either the horizontal (x) or vertical (y) axis. Can be set to either "x" or "y".
     * @var $dataAX[ 'axis' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-axis
     * 
     * @code
       &lt;div id="sortable"&gt;<br>&nbsp;&nbsp;&lt;span&gt;Item1&lt;/span&gt;<br>&nbsp;&nbsp;&lt;span&gt;Item2&lt;/span&gt;<br>&nbsp;&nbsp;&lt;span&gt;Item3&lt;/span&gt;<br>&lt;/div&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;axis: "x"<br>&nbsp;&nbsp; });<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function axis ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "axis" => $dataAX );
      
      if ( is_string ( $dataAX[ 'axis' ] ) )
      {
        parent::addData ( "axis", $dataAX[ 'axis' ] );
        unset ( $dataAX[ 'axis' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'axis' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::axis ( \$data[ 'axis' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * If set to <b><u>true</u></b> the widget will auto-scroll the container when the mouse/finger is close to the top/bottom of it.
     * @var $dataAX[ 'autoScroll' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-autoScroll
     * 
     * @code
       &lt;div style="width: 200px; height: 200px; overflow: auto"&gt;<br>&nbsp;&nbsp;&lt;div style="width: 1000px; height: 1000px;"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="sortable"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 1&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 2&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 3&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 4&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 5&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 6&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 7&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 8&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 9&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 10&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 11&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;Item 12&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&lt;/div&gt;<br>&lt;/div&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;autoScroll: true<br>&nbsp;&nbsp; });<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function autoScroll ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "autoScroll" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'autoScroll' ] ) )
      {
        parent::addData ( "autoScroll", $dataAX[ 'autoScroll' ] );
        unset ( $dataAX[ 'autoScroll' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'autoScroll' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::autoScroll ( \$data[ 'autoScroll' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Selector that determines the container to which boundaries the hint movement will be constrained.
     * @var $dataAX[ 'container' ]: ( String | jQuery ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-container
     * 
     * @code
       &lt;div id="wrapper"&gt;<br>&nbsp;&nbsp;&lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Item1&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Item2&lt;/li&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Item3&lt;/li&gt;<br>&nbsp;&nbsp;&lt;/ul&gt;<br>&lt;/div&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;container: $("#wrapper")<br>&nbsp;&nbsp; });<br>&lt;/script&gt;<br><br>&lt;style&gt;<br>&nbsp;&nbsp;#wrapper {<br>&nbsp;&nbsp;&nbsp;&nbsp;padding: 10px;<br>&nbsp;&nbsp;&nbsp;&nbsp;width: 100px;<br>&nbsp;&nbsp;&nbsp;&nbsp;border: 1px solid #FF0000;<br>&nbsp;&nbsp;}<br>&lt;/style&gt;
     * @endcode
     * @throws string type error
     */
    public function container ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "container" => $dataAX );
      
      if ( is_string ( $dataAX[ 'container' ] ) )
      {
        parent::addData ( "container", $dataAX[ 'container' ] );
        unset ( $dataAX[ 'container' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'container' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::container ( \$data[ 'container' ] type must be 'String' | 'jQuery'" );
      }
      
    }
    
    
    /**
     * Selector which determines if items from the current Sortable widget can be accepted from another Sortable container(s). The <b><u>connectWith</u></b> option describes <strong>one way</strong> relationship, if the developer wants a two way connection then the connectWith option should be set on both widgets.
     * By default when the Sortable widget is left with no items its height will become zero. This will prevent the user from being able to drop items back into it. To avoid this behaviour the developer should set the min-height CSS property of the sortable container.
     * 
     * ( ! ) By default when the Sortable widget is left with no items its height will become zero. This will prevent the user from being able to drop items back into it. To avoid this behaviour the developer should set the min-height CSS property of the sortable container.
     * @var $dataAX[ 'connectWith' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-connectWith
     * 
     * @code
       &lt;ul id="listA"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;ul id="listB"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemB1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemB2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemB3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#listA").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;connectWith: "#listB"<br>&nbsp;&nbsp;});<br><br>&nbsp;&nbsp;$("#listB").kendoSortable();<br>&lt;/script&gt;<br><br>&lt;style&gt;<br>&nbsp;&nbsp;#listA li { background-color: #FF0000; }<br>&nbsp;&nbsp;#listB li { background-color: #0000FF; }<br>&lt;/style&gt;
     * @endcode
     * @code
        &lt;ul id="listA"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;ul id="listB"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemB1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemB2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemB3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#listA").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;connectWith: "#listB"<br>&nbsp;&nbsp;});<br><br>&nbsp;&nbsp;$("#listB").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;connectWith: "#listA"<br>&nbsp;&nbsp;});<br>&lt;/script&gt;<br><br>&lt;style&gt;<br>&nbsp;&nbsp;#listA, #listB {<br>&nbsp;&nbsp;&nbsp;&nbsp;border: 1px solid #000000;<br>&nbsp;&nbsp;&nbsp;&nbsp;min-height: 20px;<br>&nbsp;&nbsp;}<br><br>&nbsp;&nbsp;#listA li { background-color: #FF0000; }<br>&nbsp;&nbsp;#listB li { background-color: #0000FF; }<br>&lt;/style&gt;
     * @endcode
     * @throws string type error
     */
    public function connectWith ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "connectWith" => $dataAX );
      
      if ( is_string ( $dataAX[ 'connectWith' ] ) )
      {
        parent::addData ( "connectWith", $dataAX[ 'connectWith' ] );
        unset ( $dataAX[ 'connectWith' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'connectWith' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::connectWith ( \$data[ 'connectWith' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * The cursor that will be shown while user drags sortable item.
     * @var $dataAX[ 'cursor' ]: ( String ) ( default: "auto" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-cursor
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;cursor: "move"<br>&nbsp;&nbsp;});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function cursor ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "cursor" => $dataAX );
      
      if ( is_string ( $dataAX[ 'cursor' ] ) )
      {
        parent::addData ( "cursor", $dataAX[ 'cursor' ] );
        unset ( $dataAX[ 'cursor' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'cursor' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::cursor ( \$data[ 'cursor' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * If set, specifies the offset of the hint relative to the mouse cursor/finger. By default, the hint is initially positioned on top of the draggable source offset. The option accepts an object with two keys: <b><u>top</u></b> and <b><u>left</u></b>.
     * @var $dataAX[ 'cursorOffset' ]: ( Object ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-cursorOffset
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;cursorOffset: { top: 30, left: 30 }<br>&nbsp;&nbsp;});<br>&lt;/script&gt;
     * @endcode
     * 
     * The left offset of the hint element relative to the mouse cursor/finger.
     * @var $dataAX[ 'cursorOffset' ][ 'left' ]: ( Number )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-cursorOffset.left
     * 
     * The top offset of the hint element relative to the mouse cursor/finger.
     * @var $dataAX[ 'cursorOffset' ][ 'top' ]: ( Number )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-cursorOffset.top
     * @throws string type error
     */
    public function cursorOffset ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "cursorOffset" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'cursorOffset' ][ 'left' ] ) )
      {
        parent::addData ( "cursorOffset.left", $dataAX[ 'cursorOffset' ][ 'left' ] );
        unset ( $dataAX[ 'cursorOffset' ][ 'left' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'cursorOffset' ][ 'left' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::cursorOffset ( \$data[ 'cursorOffset' ][ 'left' ] type must be 'Number'" );
      }
      
      if ( is_numeric ( $dataAX[ 'cursorOffset' ][ 'top' ] ) )
      {
        parent::addData ( "cursorOffset.top", $dataAX[ 'cursorOffset' ][ 'top' ] );
        unset ( $dataAX[ 'cursorOffset' ][ 'top' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'cursorOffset' ][ 'top' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::cursorOffset ( \$data[ 'cursorOffset' ][ 'top' ] type must be 'Number'" );
      }
      
      if ( is_array ( $dataAX[ 'cursorOffset' ] ) )
      {
        parent::addData ( "cursorOffset", $dataAX[ 'cursorOffset' ] );
        unset ( $dataAX[ 'cursorOffset' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'cursorOffset' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::cursorOffset ( \$data[ 'cursorOffset' ] type must be 'Object'" );
      }
      
    }
    
    
    /**
     * Selector that determines which items are disabled. <strong>Disabled items cannot be dragged but are valid sort targets</strong>.
     * @var $dataAX[ 'disabled' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-disabled
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li class="disabled"&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA4&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;disabled: ".disabled"<br>&nbsp;&nbsp;});<br>&lt;/script&gt;<br><br>&lt;style&gt;<br>&nbsp;&nbsp;.disabled { color: #FF0000; }<br>&lt;/style&gt;
     * @endcode
     * @throws string type error
     */
    public function disabled ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "disabled" => $dataAX );
      
      if ( is_string ( $dataAX[ 'disabled' ] ) )
      {
        parent::addData ( "disabled", $dataAX[ 'disabled' ] );
        unset ( $dataAX[ 'disabled' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'disabled' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::disabled ( \$data[ 'disabled' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Selector that determines which items are sortable. <strong>Filtered items cannot be dragged and are not valid sort targets</strong>.
     * @var $dataAX[ 'filter' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-filter
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li class="filtered"&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA4&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;filter: "&gt;li:not(.filtered)"<br>&nbsp;&nbsp;});<br>&lt;/script&gt;<br><br>&lt;style&gt;<br>&nbsp;&nbsp;.filtered { color: #FF0000; }<br>&lt;/style&gt;
     * @endcode
     * @throws string type error
     */
    public function filter ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "filter" => $dataAX );
      
      if ( is_string ( $dataAX[ 'filter' ] ) )
      {
        parent::addData ( "filter", $dataAX[ 'filter' ] );
        unset ( $dataAX[ 'filter' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'filter' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::filter ( \$data[ 'filter' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Selector that determines which element will be used as a draggable handler. If a handler is defined, the user will be able to move the Sortable items only if the cursor/finger is positioned onto the handler element.
     * @var $dataAX[ 'handler' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-handler
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;&lt;span class="handler"&gt;&lt;/span&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;&lt;span class="handler"&gt;&lt;/span&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;&lt;span class="handler"&gt;&lt;/span&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;handler: ".handler"<br>&nbsp;&nbsp;});<br>&lt;/script&gt;<br><br>&lt;style&gt;<br>&nbsp;&nbsp;.handler {<br>&nbsp;&nbsp;&nbsp;&nbsp;width: 16px;<br>&nbsp;&nbsp;&nbsp;&nbsp;height: 16px;<br>&nbsp;&nbsp;&nbsp;&nbsp;background-color: #FF0000;<br>&nbsp;&nbsp;&nbsp;&nbsp;display: inline-block;<br>&nbsp;&nbsp;}<br>&lt;/style&gt;
     * @endcode
     * @throws string type error
     */
    public function handler ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "handler" => $dataAX );
      
      if ( is_string ( $dataAX[ 'handler' ] ) )
      {
        parent::addData ( "handler", $dataAX[ 'handler' ] );
        unset ( $dataAX[ 'handler' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'handler' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::handler ( \$data[ 'handler' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Provides a way for customization of the sortable item hint. If a function is supplied, it receives one argument - the draggable element's jQuery object. If hint function is not provided the widget will clone dragged item and use it as a hint.
     * <strong>Important: The hint element is appended to the <code>&lt;body&gt;</code> tag.</strong> The developer should have this in mind in order to avoid styling issues.
     * 
     * ( ! ) <strong>Important: The hint element is appended to the <b><u>&lt;body&gt;</u></b> tag.</strong> The developer should have this in mind in order to avoid styling issues.
     * @var $dataAX[ 'hint' ]: ( Function | String | jQuery )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-hint
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;hint: function(element) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $("&lt;span&gt;&lt;/span&gt;")<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.text(element.text())<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.css("color", "#FF0000");<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function hint ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "hint" => $dataAX );
      
      if ( is_string ( $dataAX[ 'hint' ] ) )
      {
        parent::addData ( "hint", $dataAX[ 'hint' ] );
        unset ( $dataAX[ 'hint' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'hint' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::hint ( \$data[ 'hint' ] type must be 'Function' | 'String' | 'jQuery'" );
      }
      
    }
    
    
    /**
     * Suitable for touch oriented user interface, in order to avoid collision with the touch scrolling gesture. When set to <b><u>true</u></b>, the item will be activated after the user taps and holds the finger on the element for a short amount of time. The item will also be activated by pressing, holding and lifting the finger without any movement. Dragging it afterwards will initiate the drag immediately.
     * @var $dataAX[ 'holdToDrag' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-holdToDrag
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;holdToDrag: true<br>&nbsp;&nbsp;});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function holdToDrag ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "holdToDrag" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'holdToDrag' ] ) )
      {
        parent::addData ( "holdToDrag", $dataAX[ 'holdToDrag' ] );
        unset ( $dataAX[ 'holdToDrag' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'holdToDrag' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::holdToDrag ( \$data[ 'holdToDrag' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Selector that determines which elements inside the sorted item's container will be ignored. <em>Useful if the sortable item contains input elements.</em>
     * <strong>Important</strong> The <code>ignore</code> option is available in the latest internal build! This feature is <strong>not</strong> included in Q1 2014 (v2014.1.318).
     * 
     * ( ! ) <strong>Important</strong> The <b><u>ignore</u></b> option is available in the latest internal build! This feature is <strong>not</strong> included in Q1 2014 (v2014.1.318).
     * @var $dataAX[ 'ignore' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-ignore
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1 &lt;input type="text" /&gt;&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2 &lt;input type="text" /&gt;&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3 &lt;input type="text" /&gt;&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;ignore: "input"<br>&nbsp;&nbsp;});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function ignore ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "ignore" => $dataAX );
      
      if ( is_string ( $dataAX[ 'ignore' ] ) )
      {
        parent::addData ( "ignore", $dataAX[ 'ignore' ] );
        unset ( $dataAX[ 'ignore' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'ignore' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::ignore ( \$data[ 'ignore' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Provides a way for customization of the sortable item placeholder. If a function is supplied, it receives one argument - the draggable element's jQuery object. If placeholder function is not provided the widget will clone dragged item, remove its ID attribute, set its visibility to hidden and use it as a placeholder.
     * **Important: The placeholder element is appended to the Sortable widget container.
     * 
     * ( ! ) **Important: The placeholder element is appended to the Sortable widget container.
     * @var $dataAX[ 'placeholder' ]: ( Function | String | jQuery )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable#configuration-placeholder
     * 
     * @code
       &lt;ul id="sortable"&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA1&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA2&lt;/li&gt;<br>&nbsp;&nbsp;&lt;li&gt;ItemA3&lt;/li&gt;<br>&lt;/ul&gt;<br><br>&lt;script&gt;<br>&nbsp;&nbsp;$("#sortable").kendoSortable({<br>&nbsp;&nbsp;&nbsp;&nbsp;placeholder: function(element) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return element.clone().css({<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"opacity": 0.3,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"border": "1px dashed #000000"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function placeholder ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "placeholder" => $dataAX );
      
      if ( is_string ( $dataAX[ 'placeholder' ] ) )
      {
        parent::addData ( "placeholder", $dataAX[ 'placeholder' ] );
        unset ( $dataAX[ 'placeholder' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'placeholder' ] ) )
      {
        throw new Exception ( "Type error - KendoUiSortable::placeholder ( \$data[ 'placeholder' ] type must be 'Function' | 'String' | 'jQuery'" );
      }
      
    }
    
    
  }