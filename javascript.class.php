<?php

  define ( "JAVASCRIPT_SPACES", 2 );

  class javascript
  {
    protected $spacesCUInt;
    protected $spacesOriginalCUInt;
    protected $dataCArr;
    static $mainJavaScriptCodeCStr;
    static $mainHtmlCodeCStr;

    public function addData ( $dataAX, $valueAX = null )
    {
      if ( is_null ( self::$mainJavaScriptCodeCStr ) )
      {
        self::$mainJavaScriptCodeCStr = "";
      }

      if ( is_null ( self::$mainHtmlCodeCStr ) )
      {
        self::$mainHtmlCodeCStr = "";
      }

      if ( is_null ( $this->dataCArr ) )
      {
        $this->dataCArr = array ();
      }

      if ( ( is_string ( $dataAX ) ) && ( !is_null ( $valueAX ) ) )
      {
        $pointerLPtr = &$this->dataCArr;
        $dataAX = explode ( '.', $dataAX );
        //$dataAX = array_reverse ( $dataAX );
        foreach ( $dataAX as $dataKeyLUInt => $dataValueLStr )
        {
          if ( ( $dataKeyLUInt == 0 ) && ( count ( $dataAX ) == 1 ) )
          {
            $pointerLPtr[ $dataAX[ $dataKeyLUInt ] ] = $valueAX;
          }
          else if ( count ( $dataAX ) - 1 == $dataKeyLUInt )
          {
            $pointerLPtr[ $dataAX[ $dataKeyLUInt ] ] = $valueAX;
          }
          else
          {
            if ( !isset ( $pointerLPtr[ $dataAX[ $dataKeyLUInt ] ] ) )
            {
              $pointerLPtr[ $dataAX[ $dataKeyLUInt ] ] = array ();
            }
            $pointerLPtr = &$pointerLPtr[ $dataAX[ $dataKeyLUInt ] ];
          }
        }
      }
      else if ( ( is_array ( $dataAX ) ) && ( is_null ( $valueAX ) ) )
      {
        $this->dataCArr = array_merge_recursive ( $this->dataCArr, $dataAX );
      }
    }

    protected function toArray ( $dataAArr, $spacesAUInt = JAVASCRIPT_SPACES, $edgesAArr = array ( "[", "]", "", "", "", "" ) )
    {
      $this->spacesCUInt = $spacesAUInt;
      $this->spacesOriginalCUInt = $spacesAUInt;

      $returnLStr = $this->arrayToJavaScript ( $dataAArr, $spacesAUInt, $edgesAArr );
      if ( strlen ( $returnLStr ) > 0 )
      {
        $returnLStr = "\r\n" . $returnLStr;
      }

      return $returnLStr;
    }

    protected function toObject ( $dataAArr, $spacesAUInt = JAVASCRIPT_SPACES, $edgesAArr = array ( "{", "}", "", "", "", "" ) )
    {
      $this->spacesCUInt = $spacesAUInt;
      $this->spacesOriginalCUInt = $spacesAUInt;

      $returnLStr = $this->arrayToJavaScript ( $dataAArr, $spacesAUInt, $edgesAArr );
      if ( strlen ( $returnLStr ) > 0 )
      {
        $returnLStr = "\r\n" . $returnLStr;
      }

      return $returnLStr;
    }

    protected function arrayToJavaScript ( $dataAX, $spacesAUInt, $edgesAArr )
    {
      $spacesLUInt = $spacesAUInt;
      if ( $spacesAUInt == -1 )
      {
        $this->spacesCUInt += $this->spacesOriginalCUInt;
        $spacesLUInt = $this->spacesCUInt;
      }

      $spacesLStr = "";
      for ( $i = 0; $i != $spacesLUInt; $i++ )
      {
        $spacesLStr .= " ";
      }

      $tmpLStr = "";

      $countLUInt = 0;

      if ( !is_array( $dataAX ) )
      {
        return $tmpLStr;
      }

      foreach ( $dataAX as $dataKeyLX => $dataValueLX )
      {
        if ( ( is_string ( $dataValueLX ) ) )
        {
          $dataValueLX = str_replace ( "'", "\\'", $dataValueLX );
        }

        if ( ( is_int ( $dataKeyLX ) ) && ( is_bool ( $dataValueLX ) ) )
        {
          $tmpLStr .= "{$spacesLStr}" . ( ( $dataValueLX == true ) ? "true,\r\n" : "false,\r\n" );
        }
        else if ( ( is_int ( $dataKeyLX ) ) && ( ( is_int ( $dataValueLX ) ) || ( is_double ( $dataValueLX ) ) || ( is_float ( $dataValueLX ) ) ) )
        {
          $tmpLStr .= "{$spacesLStr}{$dataValueLX},\r\n";
        }
        else if ( ( is_int ( $dataKeyLX ) ) && ( is_string ( $dataValueLX ) ) )
        {
          $tmpLStr .= "{$spacesLStr}'{$dataValueLX}',\r\n";
        }
        else if ( ( is_string ( $dataKeyLX ) ) && ( is_bool ( $dataValueLX ) ) )
        {
          $tmpLStr .= "{$spacesLStr}{$dataKeyLX}: " . ( ( $dataValueLX == true ) ? "true,\r\n" : "false,\r\n" );
        }
        else if ( ( is_string ( $dataKeyLX ) ) && ( ( is_int ( $dataValueLX ) ) || ( is_double ( $dataValueLX ) ) || ( is_float ( $dataValueLX ) ) ) )
        {
          $tmpLStr .= "{$spacesLStr}{$dataKeyLX}: {$dataValueLX},\r\n";
        }
        else if ( ( is_string ( $dataKeyLX ) ) && ( is_string ( $dataValueLX ) ) )
        {
          if ( preg_match ( "%new +date%i", $dataValueLX ) )
          {
            $tmpLStr .= "{$spacesLStr}{$dataKeyLX}: {$dataValueLX},\r\n";
          }
          else
          {
            $tmpLStr .= "{$spacesLStr}{$dataKeyLX}: '{$dataValueLX}',\r\n";
          }
        }
        else if ( ( is_string ( $dataKeyLX ) ) && ( is_array ( $dataValueLX ) ) )
        {
          $tmpLStr .= "{$spacesLStr}{$dataKeyLX}: {$edgesAArr[ 0 ]}\r\n" . $this->arrayToJavaScript( $dataValueLX, -1, $edgesAArr ) . "{$spacesLStr}{$edgesAArr[ 1 ]},\r\n";
        }

        if ( ( $countLUInt == count ( $dataAX ) - 1 ) && ( substr ( $tmpLStr, -3 ) == ",\r\n" ) )
        {
          $this->spacesCUInt -= $this->spacesOriginalCUInt;

          $tmpLStr  = substr ( $tmpLStr, 0, -3 );
          $tmpLStr .= "\r\n";
        }

        $countLUInt += 1;
      }

      return $tmpLStr;
    }

    protected function garbageCollector ( &$dataAArr )
    {
      $dataKeyLX = null;
      if ( !is_array ( $dataAArr ) )
      {
        return;
      }
      if ( ( is_array ( $dataAArr ) ) && ( count ( $dataAArr ) == 0 ) )
      {
        unset ( $dataAArr );
        return;
      }
      foreach ( $dataAArr as $dataKeyLX => $dataValueLX )
      {
        if ( ( is_array ( $dataAArr[ $dataKeyLX ] ) ) && ( count ( $dataAArr[ $dataKeyLX ] ) == 0 ) )
        {
          unset ( $dataAArr[ $dataKeyLX ] );
        }
        else if ( is_array ( $dataAArr[ $dataKeyLX ] ) )
        {
          $this->garbageCollector ( $dataAArr[ $dataKeyLX ] );
        }
      }
      if ( ( is_array ( $dataAArr[ $dataKeyLX ] ) ) && ( count ( $dataAArr[ $dataKeyLX ] ) == 0 ) )
      {
        unset ( $dataAArr[ $dataKeyLX ] );
      }
    }
  }