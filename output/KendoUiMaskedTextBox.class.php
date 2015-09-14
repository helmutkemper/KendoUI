<?php

  /**
   * Represents the Kendo UI MaskedTextBox widget. Inherits from Widget.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox
   * Note that the promptChar should not be equal to any of the used mask literals in the mask value.
   */
  class KendoUiMaskedTextBox extends javascript
  {
    private $outputCStr;
    private $idElementCStr;
    private $nameVarCStr;
    private $htmlTagExtraCStr;
    
    function __construct ( $idElementAStr, $nameVarAStr = null, $htmlTagExtraAStr = null )
    {
      $this->idElementCStr = $idElementAStr;
      $this->nameVarCStr = $nameVarAStr;
      $this->htmlTagExtraCStr = $htmlTagExtraAStr;
    }
    
    //---------- inicio codigo importante
    //
    //Coisas que não serão apagadas podem ser digitadas aqui dentro.
    //
    
    public function toHtmlOutput ( $htmlIdAStr, $extraAStr )
    {
      self::$mainHtmlCodeCStr .= "<input id=\"{$htmlIdAStr}\" {$extraAStr}>";
    }
    
    
    //---------- fim codigo importante
    
    public function toJavaScriptOutput ()
    {
      if ( !is_null ( $this->nameVarCStr ) )
      {
        self::$mainJavaScriptCodeCStr .= "var {$this->nameVarCStr} = ";
      }
      self::$mainJavaScriptCodeCStr .= "$(\"#{$this->idElementCStr}\").KendoUiMaskedTextBox({";
      self::$mainJavaScriptCodeCStr .= $this->toObject( $this->dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      $this->dataCArr = null;
      return self::$mainJavaScriptCodeCStr;
    }
    
    /**
     * Specifies whether the widget will replace the prompt characters with spaces on blur. Prompt chars will be shown again on focus (available since Q2 2014 SP1).
     * @var $dataAX[ 'clearPromptChar' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-clearPromptChar
     * 
     * @code
       Example - specify different prompt char
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "000000",
            clearPromptChar: true
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function clearPromptChar ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "clearPromptChar" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'clearPromptChar' ] ) )
      {
        parent::addData ( "clearPromptChar", $dataAX[ 'clearPromptChar' ] );
        unset ( $dataAX[ 'clearPromptChar' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'clearPromptChar' ] ) )
      {
        throw new Exception ( "Type error - KendoUiMaskedTextBox::clearPromptChar ( \$data[ 'clearPromptChar' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Specifies the culture info used by the widget.
     * @var $dataAX[ 'culture' ]: ( String ) ( default: "en-US" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-culture
     * 
     * @code
       Example - specify German culture internationalization
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "0,000.00 $",
            culture: "de-DE"
        });
        </script>
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
        throw new Exception ( "Type error - KendoUiMaskedTextBox::culture ( \$data[ 'culture' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the input mask. The following mask rules are supported:
     * @var $dataAX[ 'mask' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-mask
     * 
     * @code
       Example - specify a phone number mask
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "(000) 000-0000"
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function mask ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "mask" => $dataAX );
      
      if ( is_string ( $dataAX[ 'mask' ] ) )
      {
        parent::addData ( "mask", $dataAX[ 'mask' ] );
        unset ( $dataAX[ 'mask' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'mask' ] ) )
      {
        throw new Exception ( "Type error - KendoUiMaskedTextBox::mask ( \$data[ 'mask' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Specifies the character used to represent the absence of user input in the widget
     * Note that the <code>promptChar</code> should not be equal to any of the used mask literals in the mask value.
     * 
     * ( ! ) Note that the <b><u>promptChar</u></b> should not be equal to any of the used mask literals in the mask value.
     * @var $dataAX[ 'promptChar' ]: ( String ) ( default: "_" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-promptChar
     * 
     * @code
       Example - specify different prompt char
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "000000",
            promptChar: " " //specify prompt char as empty char
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function promptChar ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "promptChar" => $dataAX );
      
      if ( is_string ( $dataAX[ 'promptChar' ] ) )
      {
        parent::addData ( "promptChar", $dataAX[ 'promptChar' ] );
        unset ( $dataAX[ 'promptChar' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'promptChar' ] ) )
      {
        throw new Exception ( "Type error - KendoUiMaskedTextBox::promptChar ( \$data[ 'promptChar' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * Defines an object of custom mask rules.
     * @var $dataAX[ 'rules' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-rules
     * 
     * @code
       Example - specify a custom rule as a RegExp instance
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "~000",
            rules: {
                "~": /[+-]/
            }
        });
        </script>
     * @endcode
     * @code
        Example - specify a custom rule as a function
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "^000^",
            rules: {
                "^": function (char) {
                    return char === "^"; //allow ony "^" symbol
                }
            }
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function rules ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "rules" => $dataAX );
      
      if ( is_array ( $dataAX[ 'rules' ] ) )
      {
        parent::addData ( "rules", $dataAX[ 'rules' ] );
        unset ( $dataAX[ 'rules' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'rules' ] ) )
      {
        throw new Exception ( "Type error - KendoUiMaskedTextBox::rules ( \$data[ 'rules' ] type must be 'Object'" );
      }
      
    }
    
    
    /**
     * Specifies whether the widget will unmask the input value on form post (available since Q1 2015).
     * @var $dataAX[ 'unmaskOnPost' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-unmaskOnPost
     * 
     * @code
       Example - unmask value on form post
        <form>
            <input id="maskedtextbox" />
            <button>Post</button>
        </form>
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "000000",
            unmaskOnPost: true
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function unmaskOnPost ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "unmaskOnPost" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'unmaskOnPost' ] ) )
      {
        parent::addData ( "unmaskOnPost", $dataAX[ 'unmaskOnPost' ] );
        unset ( $dataAX[ 'unmaskOnPost' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'unmaskOnPost' ] ) )
      {
        throw new Exception ( "Type error - KendoUiMaskedTextBox::unmaskOnPost ( \$data[ 'unmaskOnPost' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Specifies the value of the MaskedTextBox widget.
     * @var $dataAX[ 'value' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox#configuration-value
     * 
     * @code
       Example - specify value option
        <input id="maskedtextbox" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "(000) 000-0000",
            value: "(123) 456-7890"
        });
        </script>
     * @endcode
     * @code
        Example - specify value option as a HTML attribute
        <input id="maskedtextbox" value="(123) 456-7890" />
        <script>
        $("#maskedtextbox").kendoMaskedTextBox({
            mask: "(000) 000-0000"
        });
        </script>
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
      
      if ( is_string ( $dataAX[ 'value' ] ) )
      {
        parent::addData ( "value", $dataAX[ 'value' ] );
        unset ( $dataAX[ 'value' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'value' ] ) )
      {
        throw new Exception ( "Type error - KendoUiMaskedTextBox::value ( \$data[ 'value' ] type must be 'String'" );
      }
      
    }
    
    
  }