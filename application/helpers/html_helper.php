<?php
/**
 * HTML要素生成用 共通メソッド
 */

if (!function_exists('makeBreadcrumb'))
{

    /**
     * パンくずリストを生成する
     *
     * @param array $hierarchy {
     *     @type string name  リストに表示する要素名
     *     @type string link  要素に付与するリンク
     * }
     * @return パンくずリストのHTML要素
     */
    function makeBreadcrumb($hierarchy)
    {
        $html_element = '<p class="topicPath">';

        $counter = 0;
        foreach ($hierarchy as $name => $link)
        {
            // 二つ目以降の要素から &gt; を追記する
            if ($counter++ !== 0) { $html_element .= ' &gt; '; }

            if (empty($link))
            {
                // リンクの要素が空の場合 a タグを追記しない
                $html_element .= $name;
            }
            else
            {
                $html_element .= '<a href="'.$link.'">'.$name.'</a>';
            }
        }
        $html_element .= '</p>';

        return $html_element;
    }

}

?>
