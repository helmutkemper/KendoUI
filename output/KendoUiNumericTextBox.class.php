<?php

  /**
   * Represents the Kendo UI NumericTextBox widget. Inherits from Widget.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox
   * Important: This method does not remove the NumericTextBox element from DOM.
   */
  class KendoUiNumericTextBox extends javascript
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
      self::$mainJavaScriptCodeCStr .= "$(\"#{$htmlIdALStr}\").KendoUiNumericTextBox({\r\n";
      self::$mainJavaScriptCodeCStr .= self::toObject( javascript::$dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      self::$dataCArr = null;
    }
    
    /**
     * Specifies the culture info used by the widget.
     * @var $dataAX[ 'culture' ]: ( String ) ( default: "en-US" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-culture
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;culture: "de-DE"<br>});<br>&lt;/script&gt;
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
        throw new Exception ( "Type error - KendoUiNumericTextBox::culture ( \$data[ 'culture' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the number precision. If not set precision defined by current culture is used.
     * @var $dataAX[ 'decimals' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-decimals
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;decimals: 1<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function decimals ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "decimals" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'decimals' ] ) )
      {
        parent::addData ( "decimals", $dataAX[ 'decimals' ] );
        unset ( $dataAX[ 'decimals' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'decimals' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::decimals ( \$data[ 'decimals' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * Specifies the text of the tooltip on the down arrow.
     * @var $dataAX[ 'downArrowText' ]: ( String ) ( default: "Decrease value" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-downArrowText
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;downArrowText: "Less"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function downArrowText ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "downArrowText" => $dataAX );
      
      if ( is_string ( $dataAX[ 'downArrowText' ] ) )
      {
        parent::addData ( "downArrowText", $dataAX[ 'downArrowText' ] );
        unset ( $dataAX[ 'downArrowText' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'downArrowText' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::downArrowText ( \$data[ 'downArrowText' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the format of the number. Any <a href="/kendo-ui/framework/globalization/numberformatting">valid number format</a> is allowed.
     * @var $dataAX[ 'format' ]: ( String ) ( default: "n" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-format
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp; format: "c0"<br>});<br>&lt;/script&gt;
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
        throw new Exception ( "Type error - KendoUiNumericTextBox::format ( \$data[ 'format' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the largest value the user can enter.
     * @var $dataAX[ 'max' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-max
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;max: 100<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="numerictextbox" max="100" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox();<br>&lt;/script&gt;
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
      
      if ( is_numeric ( $dataAX[ 'max' ] ) )
      {
        parent::addData ( "max", $dataAX[ 'max' ] );
        unset ( $dataAX[ 'max' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'max' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::max ( \$data[ 'max' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * Specifies the smallest value the user can enter.
     * @var $dataAX[ 'min' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-min
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;min: -100<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="numerictextbox" min="-100" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox();<br>&lt;/script&gt;
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
      
      if ( is_numeric ( $dataAX[ 'min' ] ) )
      {
        parent::addData ( "min", $dataAX[ 'min' ] );
        unset ( $dataAX[ 'min' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'min' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::min ( \$data[ 'min' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * The hint displayed by the widget when it is empty. Not set by default.
     * @var $dataAX[ 'placeholder' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-placeholder
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;placeholder: "Select A Value"<br>});<br>&lt;/script&gt;
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
        throw new Exception ( "Type error - KendoUiNumericTextBox::placeholder ( \$data[ 'placeholder' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies whether the up and down spin buttons should be rendered
     * @var $dataAX[ 'spinners' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-spinners
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;spinners: false<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function spinners ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "spinners" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'spinners' ] ) )
      {
        parent::addData ( "spinners", $dataAX[ 'spinners' ] );
        unset ( $dataAX[ 'spinners' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'spinners' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::spinners ( \$data[ 'spinners' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Specifies the value used to increment or decrement widget value.
     * @var $dataAX[ 'step' ]: ( Number ) ( default: 1 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-step
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;step: 0.1<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="numerictextbox" step="0.1" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox();<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function step ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "step" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'step' ] ) )
      {
        parent::addData ( "step", $dataAX[ 'step' ] );
        unset ( $dataAX[ 'step' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'step' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::step ( \$data[ 'step' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * Specifies the text of the tooltip on the up arrow.
     * @var $dataAX[ 'upArrowText' ]: ( String ) ( default: "Increase value" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-upArrowText
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;upArrowText: "More"<br>});<br>&lt;/script&gt;
     * @endcode
     * @throws string type error
     */
    public function upArrowText ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "upArrowText" => $dataAX );
      
      if ( is_string ( $dataAX[ 'upArrowText' ] ) )
      {
        parent::addData ( "upArrowText", $dataAX[ 'upArrowText' ] );
        unset ( $dataAX[ 'upArrowText' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'upArrowText' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::upArrowText ( \$data[ 'upArrowText' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the value of the NumericTextBox widget.
     * @var $dataAX[ 'value' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox#configuration-value
     * 
     * @code
       &lt;input id="numerictextbox" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox({<br>&nbsp;&nbsp;value: 10<br>});<br>&lt;/script&gt;
     * @endcode
     * @code
        &lt;input id="numerictextbox" value="10" /&gt;<br>&lt;script&gt;<br>$("#numerictextbox").kendoNumericTextBox();<br>&lt;/script&gt;
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
      
      if ( is_numeric ( $dataAX[ 'value' ] ) )
      {
        parent::addData ( "value", $dataAX[ 'value' ] );
        unset ( $dataAX[ 'value' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'value' ] ) )
      {
        throw new Exception ( "Type error - KendoUiNumericTextBox::value ( \$data[ 'value' ] type must be 'Number'" );
      }
      
    }
    
    
  }