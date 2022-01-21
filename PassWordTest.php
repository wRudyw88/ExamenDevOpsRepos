<?php

class PassWordTest
{
    public function testEightsCarractersGiven12345678MustResturnTrue(){
        // Arrange
        $PassWord = new PassWord();

        // Act
        $verrifyPassWord = $PassWord->verrifyPassWord(12345678);

        //Assert
        $this->assertEquals (TRUE, $verrifyPassWord);
    }

}