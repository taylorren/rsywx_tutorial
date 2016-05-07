<?php

/* * ***********************************************

  Paginator - the Symfony pagination class
  Author: Taylor Ren (taylor.ren@gmail.com)
  Copyright (c): 2012, all rights reserved
  Version: 0.0.1

 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

  You may contact the author of Paginator by e-mail at:
  taylor.ren@gmail.com

  The latest version of Paginator can be obtained from:
  http://www.rsywx.net/download/program/Paginator.php

 * *********************************************** */

namespace lib;

class Paginator
{
    private $totalPages;
    private $page;
    private $rpp;
    
    public function __construct($page, $totalcount, $rpp)
    {
        $this->rpp=$rpp;
        $this->page=$page;
        
        $this->totalPages=$this->setTotalPages($totalcount, $rpp);
    }

    /*
     * var recCount: the total count of records
     * var $rpp: the record per page
     */

    private function setTotalPages($totalcount, $rpp)
    {
        if ($rpp == 0)
        {
            $rpp = 20; //This is forced in this. Need to get parameter from configuration but seems not necessary
        }
        
        $this->totalPages=ceil($totalcount / $rpp);
        return $this->totalPages;
    }
    
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    public function getPagesList()
    {
        $pageCount = 5;
        if ($this->totalPages <= $pageCount) //Less than total 5 pages
        {
            return [1, 2, 3, 4, 5];
        }
        if($this->page <=3)
        {
            return [1,2,3,4,5];
        }
            

        $i = $pageCount;
        $r=array();
        $half = floor($pageCount / 2);
        if ($this->page + $half > $this->totalPages) // Close to end
        {
            while ($i >= 1)
            {
                $r[] = $this->totalPages - $i + 1;
                $i--;
            }
            return $r;
        } else
        {
            while ($i >= 1)
            {
                $r[] = $this->page - $i + $half + 1;
                $i--;
            }
            return $r;
        }
    }

}

?>
