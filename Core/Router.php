<?php namespace Core;
class Router
{
    public $rout = [];
    public $param;
    protected $nameSpace = "App\Controllers\\";

    public function Get($rout, $param)
    {
        $rout = preg_replace("/^\//", "", $rout);
        $rout = preg_replace("/\//", "\/", $rout);
        $rout = preg_replace("/\{([a-zA-Z0-9]+)\}/", "(?<\\1>[a-zA-Z0-9]+)", $rout);
        $rout = "/^" . $rout . "\/?$/i";
        $rout = preg_replace("/\s/", "", $rout);
        if (is_string($param)) {
            list($AllParam['Controller'], $AllParam['method']) = explode("@", $param);
        }
        if (is_array($param)) {
            list($AllParam['Controller'], $AllParam['method']) = explode("@", $param['uses']);
            unset($param['uses']);
            $AllParam = array_merge($AllParam, $param);
        }
        $this->rout[$rout] = $AllParam;
    }

    protected function CheckRout($url)
    {
        foreach ($this->rout as $rout => $param) {
            if (preg_match($rout, $url, $option)) {
                foreach ($option as $key => $value) {
                    if (is_string($key)) {
                        $param['param'][$key] = $value;
                    }
                }
                $this->param = $param;
                return true;
            }
        }
        return false;
    }

    public function disPatch($url)
    {
        $url = $this->RemoveQueryFromUrl($url);
        if ($this->CheckRout($url)) {
            $controller = $this->GetNameSpace() . $this->param['Controller'];
            $method = $this->param['method'];
            if (class_exists($controller)) {
                $ControllerObject = new $controller();
                if (is_callable([$ControllerObject, $method])) {
                    if (isset($this->param['param'])) {
                        echo call_user_func_array([$ControllerObject, $method], $this->param['param']);
                    } else {
                        echo call_user_func([$ControllerObject, $method]);
                    }
                } else {
                    throw new \Exception("Method {$method} is Not Available!");
                }
            } else {
                throw new \Exception("Class {$controller} Not Found !");
            }
        } else {
            throw new \Exception("Route ` {$url} ` Not Found");
        }

    }

    protected function GetNameSpace()
    {
        $nameSpace = $this->nameSpace;
        if (array_key_exists('namespace', $this->param)) {
            $nameSpace .= $this->param['namespace'] . "\\";
        }
        return $nameSpace;
    }

    protected function RemoveQueryFromUrl($url)
    {
        if ($url != "") {
            $part = explode("&", $url);
            if (!preg_match("/\=/", $part[0])) {
                $Resault = $part[0];
            } else {
                $Resault = false;
            }
        } else {
            $Resault = false;
        }
        return $Resault;
    }
}

?>