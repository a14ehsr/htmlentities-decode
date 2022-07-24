<?php
$entities = " <>&\"'ˆ^˜~–—¢£¥€©®™ƒŒœ•…‘†‰α⁄←♠1Aaあｱ一𡈽";
// $entities = "あいうえおabcdf";
# "𡈽"はUnicodeの4バイト文字

// 参考
// https://e-words.jp/p/r-htmlentity.html

$decodeList1 = array(
  "&",
  "¦",
  "µ",
  "‰",
  "¤",
  "€",
  "¢",
  "£",
  "¥",
  "©",
  "®",
  "™",
  "↑",
  "→",
  "↓",
  "←",
  "↔",
  "↵",
  "⇑",
  "⇒",
  "⇓",
  "⇐",
  "⇔",
  "♠",
  "♣",
  "♥",
  "♦",
  "ª",
  "º",
  "¹",
  "²",
  "³",
  "½",
  "¼",
  "¾",
  "·",
  "¡",
  "¿",
  "\"",
  "‘",
  "’",
  "“",
  "”",
  "«",
  "»",
  " ",
  " ",
  " ",
  " ",
  "—",
  "–",
  "­",
  "•",
  "¶",
  "§",
  "†",
  "‡",
  "…",
  "◊",
  "‾",
  "⁄",
  "∞",
  "√",
  "−",
  "±",
  "×",
  "÷",
  "≠",
  "≈",
  "≅",
  ">",
  "<",
  "≥",
  "≤",
  "ƒ",
  "∝",
  "′",
  "″",
  "∫",
  "∂",
  "∇",
  "∑",
  "∏",
  "ℑ",
  "ℜ",
  "℘",
  "∼",
  "∴",
  "ϖ",
  "∠",
  "°",
  "⊥",
  "≡",
  "¬",
  "∀",
  "∃",
  "∧",
  "∨",
  "∅",
  "∩",
  "∪",
  "∈",
  "∉",
  "∋",
  "⊂",
  "⊃",
  "⊄",
  "⊆",
  "⊇",
  "⋅",
  "∗",
  "⊕",
  "⊗",
  "⌈",
  "⌊",
  "⌉",
  "⌋",
);

$encodeList1_1 = array(
  "&amp;",
  "&brvbar;",
  "&micro;",
  "&permil;",
  "&curren;",
  "&euro;",
  "&cent;",
  "&pound;",
  "&yen;",
  "&copy;",
  "&reg;",
  "&trade;",
  "&uarr;",
  "&rarr;",
  "&darr;",
  "&larr;",
  "&harr;",
  "&crarr;",
  "&uArr;",
  "&rArr;",
  "&dArr;",
  "&lArr;",
  "&hArr;",
  "&spades;",
  "&clubs;",
  "&hearts;",
  "&diams;",
  "&ordf;",
  "&ordm;",
  "&sup1;",
  "&sup2;",
  "&sup3;",
  "&frac12;",
  "&frac14;",
  "&frac34;",
  "&middot;",
  "&iexcl;",
  "&iquest;",
  "&quot;",
  "&lsquo;",
  "&rsquo;",
  "&ldquo;",
  "&rdquo;",
  "&laquo;",
  "&raquo;",
  "&nbsp;",
  "&emsp;",
  "&ensp;",
  "&thinsp;",
  "&mdash;",
  "&ndash;",
  "&shy;",
  "&bull;",
  "&para;",
  "&sect;",
  "&dagger;",
  "&Dagger;",
  "&hellip;",
  "&loz;",
  "&oline;",
  "&frasl;",
  "&infin;",
  "&radic;",
  "&minus;",
  "&plusmn;",
  "&times;",
  "&divide;",
  "&ne;",
  "&asymp;",
  "&cong;",
  "&gt;",
  "&lt;",
  "&ge;",
  "&le;",
  "&fnof;",
  "&prop;",
  "&prime;",
  "&Prime;",
  "&int;",
  "&part;",
  "&nabla;",
  "&sum;",
  "&prod;",
  "&image;",
  "&real;",
  "&weierp;",
  "&sim;",
  "&there4;",
  "&piv;",
  "&ang;",
  "&deg;",
  "&perp;",
  "&equiv;",
  "&not;",
  "&forall;",
  "&exist;",
  "&and;",
  "&or;",
  "&empty;",
  "&cap;",
  "&cup;",
  "&isin;",
  "&notin;",
  "&ni;",
  "&sub;",
  "&sup;",
  "&nsub;",
  "&sube;",
  "&supe;",
  "&sdot;",
  "&lowast;",
  "&oplus;",
  "&otimes;",
  "&lceil;",
  "&lfloor;",
  "&rceil;",
  "&rfloor;"
);

$encodeList1_2 = array(
  "&#38;",
  "&#166;",
  "&#181;",
  "&#8240;",
  "&#164;",
  "&#128;",
  "&#162;",
  "&#163;",
  "&#165;",
  "&#169;",
  "&#174;",
  "&#8482;",
  "&#8593;",
  "&#8594;",
  "&#8595;",
  "&#8592;",
  "&#8596;",
  "&#8629;",
  "&#8657;",
  "&#8658;",
  "&#8659;",
  "&#8656;",
  "&#8660;",
  "&#9824;",
  "&#9827;",
  "&#9829;",
  "&#9830;",
  "&#170;",
  "&#186;",
  "&#185;",
  "&#178;",
  "&#179;",
  "&#189;",
  "&#188;",
  "&#190;",
  "&#183;",
  "&#161;",
  "&#191;",
  "&#34;",
  "&#8216;",
  "&#8217;",
  "&#8220;",
  "&#8221;",
  "&#171;",
  "&#187;",
  "&#160;",
  "&#8195;",
  "&#8194;",
  "&#8201;",
  "&#8212;",
  "&#8211;",
  "&#173;",
  "&#8226;",
  "&#182;",
  "&#167;",
  "&#8224;",
  "&#8225;",
  "&#8230;",
  "&#9674;",
  "&#8254;",
  "&#8260;",
  "&#8734;",
  "&#8730;",
  "&#8722;",
  "&#177;",
  "&#215;",
  "&#247;",
  "&#8800;",
  "&#8776;",
  "&#8773;",
  "&#62;",
  "&#60;",
  "&#8805;",
  "&#8804;",
  "&#402;",
  "&#8733;",
  "&#8242;",
  "&#8243;",
  "&#8747;",
  "&#8706;",
  "&#8711;",
  "&#8721;",
  "&#8719;",
  "&#8465;",
  "&#8476;",
  "&#8472;",
  "&#8764;",
  "&#8756;",
  "&#982;",
  "&#8736;",
  "&#176;",
  "&#8869;",
  "&#8801;",
  "&#172;",
  "&#8704;",
  "&#8707;",
  "&#8743;",
  "&#8744;",
  "&#8709;",
  "&#8745;",
  "&#8746;",
  "&#8712;",
  "&#8713;",
  "&#8715;",
  "&#8834;",
  "&#8835;",
  "&#8836;",
  "&#8838;",
  "&#8839;",
  "&#8901;",
  "&#8727;",
  "&#8853;",
  "&#8855;",
  "&#8968;",
  "&#8970;",
  "&#8969;",
  "&#8971;",
);

// 参考
// https://qiita.com/ka215/items/ace36f55c3ad1297de81#htmlentities%E7%B3%BB%E4%BA%92%E6%8F%9B%E3%81%AEjavascript%E7%89%88html%E3%82%A8%E3%83%B3%E3%83%86%E3%82%A3%E3%83%86%E3%82%A3%E5%87%A6%E7%90%86

$decodeList2 = array(
  "á",
  "Á",
  "â",
  "Â",
  "´",
  "æ",
  "Æ",
  "à",
  "À",
  "ℵ",
  "α",
  "Α",
  "'",
  "å",
  "Å",
  "ã",
  "Ã",
  "ä",
  "Ä",
  "„",
  "β",
  "Β",
  "ç",
  "Ç",
  "¸",
  "χ",
  "Χ",
  "ˆ",
  "δ",
  "Δ",
  "é",
  "É",
  "ê",
  "Ê",
  "è",
  "È",
  "ε",
  "Ε",
  "η",
  "Η",
  "ð",
  "Ð",
  "ë",
  "Ë",
  "γ",
  "Γ",
  "í",
  "Í",
  "î",
  "Î",
  "ì",
  "Ì",
  "ι",
  "Ι",
  "ï",
  "Ï",
  "κ",
  "Κ",
  "λ",
  "Λ",
  "〈",
  "«",
  "‎",
  "‹",
  "¯",
  "μ",
  "Μ",
  "ñ",
  "Ñ",
  "ν",
  "Ν",
  "ó",
  "Ó",
  "ô",
  "Ô",
  "œ",
  "Œ",
  "ò",
  "Ò",
  "ω",
  "Ω",
  "ο",
  "Ο",
  "ø",
  "Ø",
  "õ",
  "Õ",
  "ö",
  "Ö",
  "φ",
  "Φ",
  "π",
  "Π",
  "ψ",
  "Ψ",
  "〉",
  "ρ",
  "Ρ",
  "‏",
  "›",
  "‚",
  "š",
  "Š",
  "§",
  "­",
  "σ",
  "Σ",
  "ς",
  "ß",
  "τ",
  "Τ",
  "θ",
  "Θ",
  "ϑ",
  "þ",
  "Þ",
  "˜",
  "ú",
  "Ú",
  "û",
  "Û",
  "ù",
  "Ù",
  "¨",
  "ϒ",
  "υ",
  "Υ",
  "ü",
  "Ü",
  "ξ",
  "Ξ",
  "ý",
  "Ý",
  "ÿ",
  "Ÿ",
  "ζ",
  "Ζ",
  "‍",
  "‌"
);

$encodeList2 = array(
  "&aacute;",
  "&Aacute;",
  "&acirc;",
  "&Acirc;",
  "&acute;",
  "&aelig;",
  "&AElig;",
  "&agrave;",
  "&Agrave;",
  "&alefsym;",
  "&alpha;",
  "&Alpha;",
  "&apos;",
  "&aring;",
  "&Aring;",
  "&atilde;",
  "&Atilde;",
  "&auml;",
  "&Auml;",
  "&bdquo;",
  "&beta;",
  "&Beta;",
  "&ccedil;",
  "&Ccedil;",
  "&cedil;",
  "&chi;",
  "&Chi;",
  "&circ;",
  "&delta;",
  "&Delta;",
  "&eacute;",
  "&Eacute;",
  "&ecirc;",
  "&Ecirc;",
  "&egrave;",
  "&Egrave;",
  "&epsilon;",
  "&Epsilon;",
  "&eta;",
  "&Eta;",
  "&eth;",
  "&ETH;",
  "&euml;",
  "&Euml;",
  "&gamma;",
  "&Gamma;",
  "&iacute;",
  "&Iacute;",
  "&icirc;",
  "&Icirc;",
  "&igrave;",
  "&Igrave;",
  "&iota;",
  "&Iota;",
  "&iuml;",
  "&Iuml;",
  "&kappa;",
  "&Kappa;",
  "&lambda;",
  "&Lambda;",
  "&lang;",
  "&laquo;",
  "&lrm;",
  "&lsaquo;",
  "&macr;",
  "&mu;",
  "&Mu;",
  "&ntilde;",
  "&Ntilde;",
  "&nu;",
  "&Nu;",
  "&oacute;",
  "&Oacute;",
  "&ocirc;",
  "&Ocirc;",
  "&oelig;",
  "&OElig;",
  "&ograve;",
  "&Ograve;",
  "&omega;",
  "&Omega;",
  "&omicron;",
  "&Omicron;",
  "&oslash;",
  "&Oslash;",
  "&otilde;",
  "&Otilde;",
  "&ouml;",
  "&Ouml;",
  "&phi;",
  "&Phi;",
  "&pi;",
  "&Pi;",
  "&psi;",
  "&Psi;",
  "&rang;",
  "&rho;",
  "&Rho;",
  "&rlm;",
  "&rsaquo;",
  "&sbquo;",
  "&scaron;",
  "&Scaron;",
  "&sect;",
  "&shy;",
  "&sigma;",
  "&Sigma;",
  "&sigmaf;",
  "&szlig;",
  "&tau;",
  "&Tau;",
  "&theta;",
  "&Theta;",
  "&thetasym;",
  "&thorn;",
  "&THORN;",
  "&tilde;",
  "&uacute;",
  "&Uacute;",
  "&ucirc;",
  "&Ucirc;",
  "&ugrave;",
  "&Ugrave;",
  "&uml;",
  "&upsih;",
  "&upsilon;",
  "&Upsilon;",
  "&uuml;",
  "&Uuml;",
  "&xi;",
  "&Xi;",
  "&yacute;",
  "&Yacute;",
  "&yuml;",
  "&Yuml;",
  "&zeta;",
  "&Zeta;",
  "&zwj;",
  "&zwnj;",
);

echo "変換前 | htmlentities(変換前) | 対応する実体参照 | html_entity_decode(実態参照)  | 対応する数値参照 | html_entity_decode(数値参照) | html_entity_decode(実態参照) === html_entity_decode(数値参照) | 返還前 === html_entity_decode(実態参照) \n";
foreach($decodeList1 as $key => $value) {
  // echo $decodeList1[$key]." | ".(htmlentities( $decodeList1[$key], ENT_QUOTES, 'UTF-8' ))." | ".$encodeList1_1[$key]." | ".html_entity_decode( $encodeList1_1[$key], ENT_QUOTES, 'UTF-8' )." | ".$encodeList1_2[$key]." | ".html_entity_decode( $encodeList1_2[$key], ENT_QUOTES, 'UTF-8' )." | ".var_export( html_entity_decode( $encodeList1_1[$key], ENT_QUOTES, 'UTF-8' ) === html_entity_decode( $encodeList1_2[$key], ENT_QUOTES, 'UTF-8' ), true)." | ".var_export($decodeList1[$key] === html_entity_decode( $encodeList1_1[$key], ENT_QUOTES, 'UTF-8' ), true)."\n";
  echo $decodeList1[$key]." | ".(htmlentities( $decodeList1[$key], ENT_QUOTES, 'UTF-8' ))." | ".$encodeList1_1[$key]." | ".html_entity_decode( $encodeList1_1[$key], ENT_QUOTES, 'UTF-8' )." | ".$encodeList1_2[$key]." | ".html_entity_decode( $encodeList1_2[$key], ENT_QUOTES, 'UTF-8' )." | ".var_export( html_entity_decode( $encodeList1_1[$key], ENT_QUOTES, 'UTF-8' ) === html_entity_decode( $encodeList1_2[$key], ENT_QUOTES, 'UTF-8' ), true)." | ".var_export($decodeList1[$key] === html_entity_decode( htmlentities($decodeList1[$key], ENT_QUOTES, 'UTF-8'), ENT_QUOTES, 'UTF-8' ), true)."\n";
}
foreach($decodeList2 as $key => $value) {
  echo $decodeList2[$key]."|".html_entity_decode( $encodeList2[$key], ENT_QUOTES, 'UTF-8' )."|".var_export($decodeList2[$key] === html_entity_decode( $encodeList2[$key], ENT_QUOTES, 'UTF-8' ), true)."\n";
}

