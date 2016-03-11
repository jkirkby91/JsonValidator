<?php

    class ValidatorTest extends PHPUnit_Framework_TestCase {

        use VladaHejda\AssertException;

        protected $obj = NULL;

        /**
         * Set up test
         */
        protected function setUp() {
            $this->obj = new JsonValidator\Validator;
        }

        /**
         * @test
         */
        public function testClassIs()
        {
            $this->assertInstanceOf(get_class($this->obj),new JsonValidator\Validator);
        }

        /**
         * @test
         */
        function validatesGoodJson()
        {
            $this->assertTrue($this->obj->validatePayload(
                    json_encode(array(
                            'key' => 'value'
                        )),
                    $response = 'json'));

        }

        /**
         * @test
         * @expectedException \Exception
         */
        function failBadJson()
        {
            $payload = '{"key" => "vaule"}';
            $response = $this->obj->validatePayload($payload,$response = 'json');
        }

        /**
         * @test
         */
        function checkArrayIsReturned()
        {
            $this->assertArrayHasKey('key',
                $this->obj->validatePayload(
                    json_encode(array(
                            'key' => 'value'
                        )),
                    $response = 'array'));
        }

        /**
         * @test
         */
        function checkObjectIsReturned()
        {
            $this->assertObjectHasAttribute('key',
                $this->obj->validatePayload(
            json_encode(array(
                    'key' => 'value'
                ))));
        }
    }
 