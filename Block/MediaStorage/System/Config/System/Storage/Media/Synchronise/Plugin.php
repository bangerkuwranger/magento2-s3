<?php
namespace cAc\Gcs\Block\MediaStorage\System\Config\System\Storage\Media\Synchronise;

class Plugin
{
    public function aroundGetTemplate()
    {
        return 'cAc_Gcs::system/config/system/storage/media/synchronise.phtml';
    }
}
