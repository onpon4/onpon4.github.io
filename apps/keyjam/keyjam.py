#!/usr/bin/python

# Keyjam Tester - test for keyjamming
# Written in 2012 by onpon4 <onpon4@riseup.net>
#
# To the extent possible under law, the author(s) have dedicated all
# copyright and related and neighboring rights to this software to the
# public domain worldwide. This software is distributed without any
# warranty.
#
# You should have received a copy of the CC0 Public Domain Dedication
# along with this software. If not, see
# <http://creativecommons.org/publicdomain/zero/1.0/>.

"""Simple tool to test for keyjamming."""

from __future__ import print_function

__version__ = "1.0"

import pygame
from pygame.locals import *

SCREENRECT = Rect(0, 0, 320, 240)


def main():
    pygame.init()

    window = pygame.display.set_mode(SCREENRECT.size)
    background = pygame.Surface(SCREENRECT.size).convert()
    clock = pygame.time.Clock()
    font = pygame.font.SysFont('Monospace,Courier,Liberation Mono', 10)

    pygame.display.set_caption('Keyjam Tester')

    keystatus = {}
    running = True
    while running:
        window.blit(background, (0, 0))
        # Events
        for event in pygame.event.get():
            if (event.type == QUIT or
                    (event.type == KEYDOWN and event.key == K_ESCAPE)):
                running = False
            elif event.type == KEYDOWN:
                keystatus[event.key] = True
            elif event.type == KEYUP:
                keystatus[event.key] = False

        split_keytext = []
        for k in keystatus.keys():
            if keystatus[k]:
                split_keytext.append(str(k))

        keytext = ' | '.join(split_keytext)
        if font.size(keytext)[0] > SCREENRECT.width:
            lines = []
            while split_keytext:
                keytext = ''
                i = 0
                while font.size(keytext)[0] < SCREENRECT.width:
                    i += 1
                    if i > len(split_keytext):
                        break
                    keytext = ' | '.join(split_keytext[:i])
                else:
                    # Means text became too long
                    i -= 1
                    keytext = ' | '.join(split_keytext[:i])
                lines.append(keytext)
                del split_keytext[:i]
        else:
            lines = [keytext]

        for i in xrange(len(lines)):
            image = font.render(lines[i], True, (255, 255, 255))
            window.blit(image, (0, i * font.get_linesize()))
        
        pygame.display.update()

if __name__ == '__main__':
    main()
