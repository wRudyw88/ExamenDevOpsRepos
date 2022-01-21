<?php

class PassWordTest
{
    public function testEightsCarractersGiven12345678MustResturnTrue(){
        // Arrange
        $PassWord = new PassWord();

        // Act
        $verrifyPassWord = $PassWord->verrifyPassWord('12345678');

        //Assert
        $this->assertEquals (TRUE, $verrifyPassWord);
    }

    public function testEightsCarractersGiven1238MustResturnFalse(){
        // Arrange
        $PassWord = new PassWord();

        // Act
        $verrifyPassWord = $PassWord->verrifyPassWord('1238');

        //Assert
        $this->assertEquals (False, $verrifyPassWord);
    }

    public function testOneSpecialCharGivenPositifPaswordWithSpecialCharMustResturnTrue(){
        // Arrange
        $PassWord = new PassWord();

        // Act
        $verrifyPassWord = $PassWord->verrifyPassWord('1234567+');

        //Assert
        $this->assertEquals (TRUE, $verrifyPassWord);
    }
    public function testOneIntGivenPositifPaswordWithSpecialCharMustResturnTrue(){
        // Arrange
        $PassWord = new PassWord();

        // Act
        $verrifyPassWord = $PassWord->verrifyPassWord('azertyu1');

        //Assert
        $this->assertEquals (TRUE, $verrifyPassWord);
    }

}