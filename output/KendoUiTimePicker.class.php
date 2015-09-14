<?php

  /**
   * Represents the Kendo UI TimePicker. Inherits from Widget.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker
   * Order of the provided parse formats is important and it should from stricter to less strict.
   */
  class KendoUiTimePicker extends javascript
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
      self::$mainJavaScriptCodeCStr .= "$(\"#{$htmlIdALStr}\").KendoUiTimePicker({\r\n";
      self::$mainJavaScriptCodeCStr .= self::toObject( javascript::$dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      self::$dataCArr = null;
    }
    
    /**
     * Configures the opening and closing animations of the popup. Setting the <b><u>animation</u></b> option to <b><u>false</u></b> will disable the opening and closing animations. As a result the popup will open and close instantly.
     * @var $dataAX[ 'animation' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;animation: false<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;animation: {<br>&nbsp; close: {<br>&nbsp;&nbsp; effects: "fadeOut zoom:out",<br>&nbsp;&nbsp; duration: 300<br>&nbsp; },<br>&nbsp; open: {<br>&nbsp;&nbsp; effects: "fadeIn zoom:in",<br>&nbsp;&nbsp; duration: 300<br>&nbsp; }<br>&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * The animation played when the popup is closed.
     * @var $dataAX[ 'animation' ][ 'close' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation.close
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;animation: {<br>&nbsp; close: {<br>&nbsp;&nbsp; effects: "zoom:out",<br>&nbsp;&nbsp; duration: 300<br>&nbsp; }<br>&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;animation: {<br>&nbsp; open: {<br>&nbsp;&nbsp; effects: "zoom:in",<br>&nbsp;&nbsp; duration: 300<br>&nbsp; }<br>&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * The animation played when the calendar popup is opened.
     * @var $dataAX[ 'animation' ][ 'open' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation.open
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;animation: {<br>&nbsp; close: {<br>&nbsp;&nbsp; effects: "zoom:out",<br>&nbsp;&nbsp; duration: 300<br>&nbsp; }<br>&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;animation: {<br>&nbsp; open: {<br>&nbsp;&nbsp; effects: "zoom:in",<br>&nbsp;&nbsp; duration: 300<br>&nbsp; }<br>&nbsp;}<br>});<br>&lt;/script&gt;
     * @endcode
     * 
     * The effect(s) to use when playing the open animation. Multiple effects should be separated with a space.
     * <a href="/kendo-ui/api/framework/fx/common">Complete list of available animations</a>
     * @var $dataAX[ 'animation' ][ 'close' ][ 'effects' ]: ( String )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation.close.effects
     * 
     * The duration of the close animation in milliseconds.
     * @var $dataAX[ 'animation' ][ 'close' ][ 'duration' ]: ( Number )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation.close.duration
     * 
     * The effect(s) to use when playing the open animation. Multiple effects should be separated with a space.
     * <a href="/kendo-ui/api/framework/fx/common">Complete list of available animations</a>
     * @var $dataAX[ 'animation' ][ 'open' ][ 'effects' ]: ( String )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation.open.effects
     * 
     * The duration of the open animation in milliseconds.
     * @var $dataAX[ 'animation' ][ 'open' ][ 'duration' ]: ( Number )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-animation.open.duration
     * @throws string type error
     */
    public function animation ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "animation" => $dataAX );
      
      if ( is_string ( $dataAX[ 'animation' ][ 'close' ][ 'effects' ] ) )
      {
        parent::addData ( "animation.close.effects", $dataAX[ 'animation' ][ 'close' ][ 'effects' ] );
        unset ( $dataAX[ 'animation' ][ 'close' ][ 'effects' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'close' ][ 'effects' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ][ 'close' ][ 'effects' ] type must be 'String'" );
      }
      
      if ( is_numeric ( $dataAX[ 'animation' ][ 'close' ][ 'duration' ] ) )
      {
        parent::addData ( "animation.close.duration", $dataAX[ 'animation' ][ 'close' ][ 'duration' ] );
        unset ( $dataAX[ 'animation' ][ 'close' ][ 'duration' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'close' ][ 'duration' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ][ 'close' ][ 'duration' ] type must be 'Number'" );
      }
      
      if ( is_string ( $dataAX[ 'animation' ][ 'open' ][ 'effects' ] ) )
      {
        parent::addData ( "animation.open.effects", $dataAX[ 'animation' ][ 'open' ][ 'effects' ] );
        unset ( $dataAX[ 'animation' ][ 'open' ][ 'effects' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'open' ][ 'effects' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ][ 'open' ][ 'effects' ] type must be 'String'" );
      }
      
      if ( is_numeric ( $dataAX[ 'animation' ][ 'open' ][ 'duration' ] ) )
      {
        parent::addData ( "animation.open.duration", $dataAX[ 'animation' ][ 'open' ][ 'duration' ] );
        unset ( $dataAX[ 'animation' ][ 'open' ][ 'duration' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'open' ][ 'duration' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ][ 'open' ][ 'duration' ] type must be 'Number'" );
      }
      
      if ( is_array ( $dataAX[ 'animation' ][ 'close' ] ) )
      {
        parent::addData ( "animation.close", $dataAX[ 'animation' ][ 'close' ] );
        unset ( $dataAX[ 'animation' ][ 'close' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'close' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ][ 'close' ] type must be 'Object'" );
      }
      
      if ( is_array ( $dataAX[ 'animation' ][ 'open' ] ) )
      {
        parent::addData ( "animation.open", $dataAX[ 'animation' ][ 'open' ] );
        unset ( $dataAX[ 'animation' ][ 'open' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'open' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ][ 'open' ] type must be 'Object'" );
      }
      
      if ( is_array ( $dataAX[ 'animation' ] ) )
      {
        parent::addData ( "animation", $dataAX[ 'animation' ] );
        unset ( $dataAX[ 'animation' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::animation ( \$data[ 'animation' ] type must be 'Object'" );
      }
      
    }
    
    
    /**
     * Specifies the culture info used by the widget.
     * @var $dataAX[ 'culture' ]: ( String ) ( default: "en-US" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-culture
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;culture: "de-DE"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function culture ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "culture" => $dataAX );
      
      if ( is_string ( $dataAX[ 'culture' ] ) )
      {
        parent::addData ( "culture", $dataAX[ 'culture' ] );
        unset ( $dataAX[ 'culture' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'culture' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::culture ( \$data[ 'culture' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies a list of dates, which are shown in the time drop-down list. If not set, the TimePicker will auto-generate the available times.
     * @var $dataAX[ 'dates' ]: ( Array )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-dates
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;dates: [<br>&nbsp;&nbsp;&nbsp;&nbsp;new Date(2000, 10, 10, 10, 0, 0),<br>&nbsp;&nbsp;&nbsp;&nbsp;new Date(2000, 10, 10, 10, 30, 0)<br>&nbsp;&nbsp;] //the drop-down list will consist only two entries - "10:00 AM" and "10:30 AM"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function dates ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "dates" => $dataAX );
      
      if ( is_array ( $dataAX[ 'dates' ] ) )
      {
        parent::addData ( "dates", $dataAX[ 'dates' ] );
        unset ( $dataAX[ 'dates' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'dates' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::dates ( \$data[ 'dates' ] type must be 'Array'" );
      }
      
    }
    
    
    /**
     * Specifies the format, which is used to format the value of the TimePicker displayed in the input. The format also will be used to parse the input.
     * @var $dataAX[ 'format' ]: ( String ) ( default: "h:mm tt" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-format
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;format: "HH:mm"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function format ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "format" => $dataAX );
      
      if ( is_string ( $dataAX[ 'format' ] ) )
      {
        parent::addData ( "format", $dataAX[ 'format' ] );
        unset ( $dataAX[ 'format' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'format' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::format ( \$data[ 'format' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the interval, between values in the popup list, in minutes.
     * @var $dataAX[ 'interval' ]: ( Number ) ( default: "30" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-interval
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;interval: 15<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function interval ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "interval" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'interval' ] ) )
      {
        parent::addData ( "interval", $dataAX[ 'interval' ] );
        unset ( $dataAX[ 'interval' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'interval' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::interval ( \$data[ 'interval' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * Specifies the end value in the popup list.
     * @var $dataAX[ 'max' ]: ( Date ) ( default: "00:00" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-max
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;max: new Date(2000, 0, 1, 22, 0, 0) //date part is ignored<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function max ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "max" => $dataAX );
      
      if ( is_array ( $dataAX[ 'max' ] ) )
      {
        $dateAsString = "";
        if ( isset ( $dataAX[ 'max' ][ "Year" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'max' ][ "Year" ]}, ";
        }
        if ( isset ( $dataAX[ 'max' ][ "Month" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'max' ][ "Month" ]}, ";
        }
        if ( isset ( $dataAX[ 'max' ][ "Day" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'max' ][ "Day" ]}, ";
        }
        if ( isset ( $dataAX[ 'max' ][ "Hour" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'max' ][ "Hour" ]}, ";
        }
        if ( isset ( $dataAX[ 'max' ][ "Minute" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'max' ][ "Minute" ]}, ";
        }
        if ( isset ( $dataAX[ 'max' ][ "Second" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'max' ][ "Second" ]}";
        }
        $dateAsString = "new Date ({$dateAsString});";
        parent::addData ( "max", $dateAsString );
        unset ( $dataAX[ 'max' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'max' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::max ( \$data[ 'max' ] type must be 'Date'" );
      }
      
    }
    
    
    /**
     * Specifies the start value in the popup list.
     * @var $dataAX[ 'min' ]: ( Date ) ( default: "00:00" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-min
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;min: new Date(2000, 0, 1, 8, 0, 0) //date part is ignored<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function min ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "min" => $dataAX );
      
      if ( is_array ( $dataAX[ 'min' ] ) )
      {
        $dateAsString = "";
        if ( isset ( $dataAX[ 'min' ][ "Year" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'min' ][ "Year" ]}, ";
        }
        if ( isset ( $dataAX[ 'min' ][ "Month" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'min' ][ "Month" ]}, ";
        }
        if ( isset ( $dataAX[ 'min' ][ "Day" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'min' ][ "Day" ]}, ";
        }
        if ( isset ( $dataAX[ 'min' ][ "Hour" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'min' ][ "Hour" ]}, ";
        }
        if ( isset ( $dataAX[ 'min' ][ "Minute" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'min' ][ "Minute" ]}, ";
        }
        if ( isset ( $dataAX[ 'min' ][ "Second" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'min' ][ "Second" ]}";
        }
        $dateAsString = "new Date ({$dateAsString});";
        parent::addData ( "min", $dateAsString );
        unset ( $dataAX[ 'min' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'min' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::min ( \$data[ 'min' ] type must be 'Date'" );
      }
      
    }
    
    
    /**
     * Specifies the formats, which are used to parse the value set with the value method or by direct input. If not set the value of the options.format will be used. Note that value of the format option is always used.
     * Order of the provided parse formats is important and it should from stricter to less strict.
     * 
     * ( ! ) Order of the provided parse formats is important and it should from stricter to less strict.
     * @var $dataAX[ 'parseFormats' ]: ( Array )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-parseFormats
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;format: "h:mm tt",<br>&nbsp;&nbsp;parseFormats: ["HH:mm"] //format also will be added to parseFormats<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function parseFormats ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "parseFormats" => $dataAX );
      
      if ( is_array ( $dataAX[ 'parseFormats' ] ) )
      {
        parent::addData ( "parseFormats", $dataAX[ 'parseFormats' ] );
        unset ( $dataAX[ 'parseFormats' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'parseFormats' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::parseFormats ( \$data[ 'parseFormats' ] type must be 'Array'" );
      }
      
    }
    
    
    /**
     * Specifies the selected time.
     * @var $dataAX[ 'value' ]: ( Date ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker#configuration-value
     * 
     * @code
       &lt;input id="timepicker" /&gt;<br>&lt;script&gt;<br>$("#timepicker").kendoTimePicker({<br>&nbsp;&nbsp;value: new Date(2011, 0, 1, 10, 30)<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function value ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "value" => $dataAX );
      
      if ( is_array ( $dataAX[ 'value' ] ) )
      {
        $dateAsString = "";
        if ( isset ( $dataAX[ 'value' ][ "Year" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'value' ][ "Year" ]}, ";
        }
        if ( isset ( $dataAX[ 'value' ][ "Month" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'value' ][ "Month" ]}, ";
        }
        if ( isset ( $dataAX[ 'value' ][ "Day" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'value' ][ "Day" ]}, ";
        }
        if ( isset ( $dataAX[ 'value' ][ "Hour" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'value' ][ "Hour" ]}, ";
        }
        if ( isset ( $dataAX[ 'value' ][ "Minute" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'value' ][ "Minute" ]}, ";
        }
        if ( isset ( $dataAX[ 'value' ][ "Second" ] ) )
        {
          $dateAsString .= "{$dataAX[ 'value' ][ "Second" ]}";
        }
        $dateAsString = "new Date ({$dateAsString});";
        parent::addData ( "value", $dateAsString );
        unset ( $dataAX[ 'value' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'value' ] ) )
      {
        throw new Exception ( "Type error - KendoUiTimePicker::value ( \$data[ 'value' ] type must be 'Date'" );
      }
      
    }
    
    
  }