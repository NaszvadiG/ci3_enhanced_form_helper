<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Enhanced Form Helper
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Novastream AB
 * @link		http://www.novastream.se
 */
 
/**
 * Enhanced Dropdown menu helper
 * Accepts Regular arrays, associative arrays and arrays that holds objects
 * @param array = holds array values or objects
 * @param string vfield = value of option
 * @param string nfield = display name of option
 * @param string name = name of select
 * @param bool/string selected = selected value
 * @param bool/string id = id of select
 * @param bool/string class = class of select
 * @param bool multiple = enable multiple mode
 * @param bool required = if select is required
 * @return string
 * 
 * Example usage: echo form_e_dropdown($array_that_hold_objects, "user_id", "username", "administrator", "selected_id", "user_dropdown", "form-control select2", false, true);
 */
 if ( ! function_exists('form_e_dropdown'))
 {
	function form_e_dropdown($options = false, $vfield = false, $nfield = false, $name = false, $selected = false, $id = false, $class = false, $multiple = false, $required = false)
    {
        $response = "Select not loaded";
        
        if ($options === false || $name === false)
        {
            return $response;
        }
        else 
        {
            $response = '<select name="'.$name.'"';
                
            if ($id != false)
            {
                $response .= ' id="'.$id.'"';
            }
            if ($class != false)
            {
                $response .= ' class="'.$class.'"';
            }
            if ($multiple != false)
            {
                $response .= ' multiple';
            }
            if ($required != false)
            {
                $response .= ' required';
            }

            $response .= '>';
            
            if (!empty($options) && is_array($options))
            {
                foreach($options as $key => $option)
                {
                    if (is_object($option))
                    {
                        if ($selected != false && is_array($selected))
                        {
                            if ((isset($option->{$vfield}) && !empty($option->{$vfield})) && (isset($option->{$nfield}) && !empty($option->{$nfield})))
                            {
                                if (in_array($option->{$vfield}, $selected))
                                {
                                    $response .= '<option value="'.$option->{$vfield}.'" selected>'.$option->{$nfield}.'</option>';
                                }
                                else 
                                {
                                    $response .= '<option value="'.$option->{$vfield}.'">'.$option->{$nfield}.'</option>';
                                }
                            }
                        }
                        else 
                        {
                            if ((isset($option->{$vfield}) && !empty($option->{$vfield})) && (isset($option->{$nfield}) && !empty($option->{$nfield})))
                            {
                                if ($selected == $option->{$vfield})
                                {
                                    $response .= '<option value="'.$option->{$vfield}.'" selected>'.$option->{$nfield}.'</option>';
                                }
                                else 
                                {
                                    $response .= '<option value="'.$option->{$vfield}.'">'.$option->{$nfield}.'</option>';
                                }
                            }
                        }
                    }
                    else 
                    {
                        if (array_keys($options) === range(0, count($options) - 1)) 
                        {
                            if ($selected != false && is_array($selected))
                            {
                                if (in_array($option, $selected))
                                {
                                    if (!empty($option))
                                    {
                                        $response .= '<option value="'.$option.'" selected>'.$option.'</option>';   
                                    }
                                }
                                else 
                                {
                                    if (!empty($option))
                                    {
                                        $response .= '<option value="'.$option.'">'.$option.'</option>';   
                                    }
                                }
                            }
                            else
                            {                                
                                if ($selected == $option)
                                {
                                    if (!empty($option))
                                    {
                                        $response .= '<option value="'.$option.'" selected>'.$option.'</option>';   
                                    }
                                }
                                else
                                {
                                    if (!empty($option))
                                    {
                                        $response .= '<option value="'.$option.'">'.$option.'</option>';   
                                    }
                                }
                            }
                        }
                        else 
                        {
                            if ($selected != false && is_array($selected))
                            {
                                if (in_array($key, $selected))
                                {
                                    if (!empty($key) && !empty($option))
                                    {
                                        $response .= '<option value="'.$key.'" selected>'.$option.'</option>';   
                                    }
                                }
                                else 
                                {
                                    if (!empty($key) && !empty($option))
                                    {
                                        $response .= '<option value="'.$key.'">'.$option.'</option>';   
                                    }
                                }
                            }
                            else 
                            {
                                if ($selected == $key)
                                {
                                    if (!empty($key) && !empty($option))
                                    {
                                        $response .= '<option value="'.$key.'" selected>'.$option.'</option>';   
                                    }
                                }
                                else 
                                {
                                    if (!empty($key) && !empty($option))
                                    {
                                        $response .= '<option value="'.$key.'">'.$option.'</option>';   
                                    }
                                }
                            }
                        }
                    }
                }
                
                $response .= '</select>';
            }
            else 
            {
                $response .= '</select>';
            }
            
            return $response;
        }
    }
 }